<?php
declare(strict_types=1);

/**
 * @property \CI_DB_query_builder $db
 * @property \CI_Loader $load
 */
class Users_model extends CI_Model
{
    /**
     * constructor
     */
    public function __construct()
    {
        $this->load->database();
    }

    /**
     * @return array
     */
    public function find_all(): array
    {
        $query = $this->db->get_where('users');

        return $query->result_array();
    }

    /**
     * @param string $id
     * @return array
     */
    public function find_by_id(string $id): array
    {
        $query = $this->db->get_where('users', ['id' => $id]);

        return $query->row_array();
    }
}
