<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Usuario_model extends CI_Model
    {
        public function construct()
        {
            parent::construct();
        }
    }

    function add_user($data)
    {
        $this->db->insert('usuarios', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    function update_user($id, $name, $last_name, $username, $password)
    {
        $data = array('name' => $name, 'last_name' => $last_name, 'username' => $username, 'password' => $password);
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    function delete_user($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('users');
        return true;
    }

    function get_users()
    {
        $this->db->select('id, name, last_name, username');
        $query = $this->db->get('users');
        return $query->result();
    }

    function get_by_username($user)
    {
        $query = $this->db->get_where('users', array('username' => $user), 1);
        return $query->row();
    }

    if ($this->form_validation->run() == FALSE)
    {
        //Muestra la página de registro con el título de error
        $data = array('titulo' => 'Error de formulario');
        $this->load->multiple_views(['head_view','menu_view','registro_view','footer_view'],$data);
    }
    //Pasa la validacion
    else
    {
        //Envío array al método insert para registro de datos
        $usuario = $this->Usuario_Model->add_user($data);
        $data_user = $array = array('user'=> $usuario, 'logued_in' => TRUE,
        'name'=>$data['name']);
        //asigno los datos a la sesion
        $this->session->set_userdata($data_user);
        //Redirecciono a la página de perfil
        redirect('perfil/'.$usuario);
    }
}
