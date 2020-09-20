<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
        $this->email = \Config\Services::email();
    }

    public function register()
    {

        if ($this->request->getPost()) {
            //lakukan validasi untuk data yang di post
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'register');
            $errors = $this->validation->getErrors();

            $bersihkanUsername = htmlspecialchars($this->request->getPost('username'));
            $username = preg_replace("/[^a-zA-Z0-9]/", "", $bersihkanUsername);


            $email = htmlspecialchars($this->request->getPost('email'));
            //jika tidak ada errors jalanakan
            if (!$errors) {
                $userModel = new \App\Models\UserModel();
                $tokenModel = new \App\Models\tokenModel();

                $user = $userModel->where('username', $username)->first();

                if ($user) {
                    $this->session->setFlashdata('error', '<div class ="alert alert-danger" role="alert">Oops!! username sudah ada  </div>');
                    return view('auth/register');
                } else {
                    $useremail = $userModel->where('email', $email)->first();
                    if ($useremail) {
                        $this->session->setFlashdata('error', '<div class ="alert alert-danger" role="alert">Oops!! email kamu sudah terdaftar</div>');
                        return view('auth/register');
                    } else {
                        $user = new \App\Entities\User();

                        $user->username = $username;
                        $user->email = $email;
                        $user->password = $this->request->getPost('password');

                        $user->created_date = date("Y-m-d H:i:s");

                        $token = base64_encode(random_bytes(32));

                        $user_token = [
                            'email' => $email,
                            'token' => $token,
                            'created_date' => time()
                        ];

                        $userModel->save($user);
                        $tokenModel->save($user_token);

                        $this->sendEmail($token, 'verify');

                        $this->session->setFlashdata('message', '<div class ="alert alert-info" role="alert">okey! please activated your account, check your email now. </div>');
                        return view('auth/login');
                    }
                }
            }
            $this->session->setFlashdata('errors', $errors);
        }

        return view('auth/register');
    }

    public function login()
    {
        if ($this->request->getPost()) {
            //lakukan validasi untuk data yang di post
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'login');
            $errors = $this->validation->getErrors();

            if (!$errors) {

                $userModel = new \App\Models\UserModel();

                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                $user = $userModel->where('username', $username)->first();


                if ($user == true) {
                    $aktif = $user->aktif;
                    if (1 == $aktif) {
                        $salt = $user->salt;
                        if ($user->password !== md5($salt . $password)) {
                            $this->session->setFlashdata('errors', ['Password Salah']);
                        } else {
                            $sessData = [
                                'username' => $user->username,
                                'id' => $user->id,
                                'isLoggedIn' => TRUE
                            ];

                            $this->session->set($sessData);

                            return redirect()->to(site_url('home/index'));
                        }
                    } else {
                        $this->session->setFlashdata('message', '<div class ="alert alert-danger" role="alert">Akun kamu belum diaktivasi. </div>');
                    }
                } else {
                    $this->session->setFlashdata('message', '<div class ="alert alert-danger" role="alert">User tidak ditemukan, silahkan registrasi terlebihdahulu </div>');
                }
            }
            $this->session->setFlashdata('errors', $errors);
        }
        return view('auth/login');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(site_url('auth/login'));
    }

    public function sendEmail($token, $type)
    {
        $email = $this->request->getPost('email');

        $this->email->setFrom('fandilla.118130122@student.itera.ac.id', 'Smart HME');
        $this->email->setTo($email);

        if ($type == 'verify') {

            $this->email->setSubject('Account Verification');

            $this->email->setMessage('<h1>Click this button activate to verify your account</h1> : <a href="' . base_url('auth/verify?email=') . $email . '&token=' . urlencode($token) . '"><button>Activate</button></a>');
        }

        if (!$this->email->send()) {
            $this->session->setFlashdata('message', '<div class ="alert alert-danger" role="alert">Oops!! coba ulangi register gagal</div>');
            return view('auth/register');
        } else {
            return true;
        }
    }
    public function verify()
    {
        $tokenModel = new \App\Models\tokenModel();
        $userModel = new \App\Models\UserModel();


        $email = $this->request->getGet('email');
        $token = $this->request->getGet('token');

        $user = $tokenModel->where('email', $email)->first();
        $time = $tokenModel->created_date;

        if ($user) {
            $user_token = $tokenModel->where('token', $token)->first();
            if ($user_token) {
                if (time() - $time == 3600) {
                    $tokenModel->where('email', $email);
                    $tokenModel->delete();
                    $userModel->where('email', $email);
                    $userModel->delete();

                    $this->session->setFlashdata('errors', ['Token Expired']);
                    return view('auth/login');
                } else {
                    $userModel->where('email', $email);
                    $userModel->set(['aktif' => 1]);
                    $userModel->update();

                    $tokenModel->where('email', $email);
                    $tokenModel->delete();
                    $this->session->setFlashdata('message', '<div class ="alert alert-success" role="alert">Congratulation! your account has been created. </div>');
                    return view('auth/login');
                }
            } else {
                $this->session->setFlashdata('errors', ['Wrong Token']);
                return view('auth/login');
            }
        } else {
            $this->session->setFlashdata('errors', ['Wrong Email']);
            return view('auth/login');
        }
    }
}
