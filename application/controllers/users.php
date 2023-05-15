<?php
declare(strict_types=1);

/**
 * @property \CI_Loader $load
 * @property \Users_model $users_model
 */
class Users extends CI_Controller
{
    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper('url_helper');
    }

    /**
     * @return void
     */
    public function index(): void
    {
        $data['users'] = $this->users_model->find_all();
        $data['title'] = 'Users list';

        $this->load->view('users/index', $data);
    }

    /**
     * @param string|null $id
     * @return void
     */
    public function view(?string $id = null): void
    {
        if ($id === null) {
            show_404();
        }

        $user = $this->users_model->find_by_id($id);

        if (empty($user)) {
            show_404();
        }

        $data['users_item'] = $user;
        $data['title'] = 'User detail';

        $this->load->view('users/view', $data);
    }
}
