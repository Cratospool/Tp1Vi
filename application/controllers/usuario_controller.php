<?php
class Usuario_controller extends CI_Controller{
function __construct()
{
    parent::__construct();
    $this ->load->model('usuario_Model'); //cargamos el modelo
}
function index()
{
    if($this->_veri_log()){
    $data = array('titulo' => 'Usuarios');

    $session_data = $this->session->userdata('logged_in');
    $data['perfil_id'] = $session_data['perfil_id'];
    $data['nombre'] = $session_data['nombre'];

    $dat = array('usuarios' => $this->usuario_model->get_usuarios() );

    $this->load->view('front/head_view', $data);
    $this->load->view('front/navbar_view');
    $this->load->view('muestrausuarios', $dat);
    $this->load->view('front/footer_view');
    }else{
    redirect('login', 'refresh'); }
}


/**
* Muestra formulario para agregar usuario
*/
function form_agrega_usuario()  	//Si se modifica, modificar (agrega_usuario) tambien
{
    if($this->_veri_log()){
    $data = array('titulo' => 'Agregar Usuarioo');

    $session_data = $this->session->userdata('logged_in');
    $data['perfil_id'] = $session_data['perfil_id'];
    $data['nombre'] = $session_data['nombre'];

    $this->load->view('front/head_view', $data);
    $this->load->view('front/navbar_view');
    $this->load->view('agregausuario');
    $this->load->view('front/footer_view');
    }else{
    redirect('login', 'refresh'); }
}


/**
* Verifica datos ingresados en el formulario para agregar usuario
*/
function agrega_usuario()
{
    //Genero las reglas de validacion
    $this->form_validation->set_rules('usuario', 'Usuario', 'required|is_unique[usuarios.nombre]');
    $this->form_validation->set_rules('apellido', 'Apellido', 'required');
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|is_unique[usuarios.email]');
    $this->form_validation->set_rules('password', 'Password', 'required');

    //Mensaje de error si no pasan las reglas
    $this->form_validation->set_message('required',
                                '<div class="alert alert-danger">El campo %s es obligatorio</div>');

    $this->form_validation->set_message('is_unique',
                                '<div class="alert alert-danger">El campo %s ya existe</div>');

    $this->form_validation->set_message('numeric',
                    '<div class="alert alert-danger">El campo %s debe contener un valor numérico</div>');


    if (!$this->form_validation->run())
    {
        $data = array('titulo' => 'Error de formulario');

        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];


        $this->load->view('front/head_view', $data);
        $this->load->view('front/navbar_view');
        $this->load->view('agregausuario');
        $this->load->view('front/footer_view');
    }
    else
    {
        $this->_image_upload();
    }
}

/**
* Muestra para modificar un usuario
*/
function muestra_modificar()
{
    $id = $this->uri->segment(2);
    $datos_usuario = $this->usuario_model->edit_usuario($id);

    if ($datos_usuario != FALSE) {
        foreach ($datos_usuario->result() as $row)
        {
            $usuario = $row->usuario;
            $perfil_id = $row->perfil_id;
            $nombre = $row->nombre;
            $apellido = $row->apellido;
            $email = $row->email;
            $password = $row->password;
        }

        $dat = array('usuario' =>$datos_usuario,
            'id'=>$id,
            'usuario'=>$usuario,
            'perfil_id'=>$perfil_id,
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'email'=>$email,
            'password'=>$password,
        );
    }
    else
    {
        return FALSE;
    }
    if($this->_veri_log()){
    $data = array('titulo' => 'Modificar Producto');
    $session_data = $this->session->userdata('logged_in');
    $data['perfil_id'] = $session_data['perfil_id'];
    $data['nombre'] = $session_data['nombre'];

    $this->load->view('front/head_view', $data);
    $this->load->view('front/navbar_view');
    $this->load->view('modificausuario', $dat);
    $this->load->view('front/footer_view');
    }else{
    redirect('login', 'refresh');}
}

/**
* Verifica datos para modificar un usuario
*/
function modificar_usuario()
{
    //Validación del formulario
    $this->form_validation->set_rules('usuario', 'Usuario', 'required|is_unique[usuarios.nombre]');
    $this->form_validation->set_rules('perfil_id', 'Perfil', 'required');
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('apellido', 'Apellido', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|numeric');


    //Mensaje del form_validation
    $this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

    $this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico, al intentar modificar estaba vacio</div>');

    $id = $this->uri->segment(2);
    $datos_usuario = $this->usuario_model->edit_usuario($id);

    foreach ($datos_usuario->result() as $row)
    {
        $imagen = $row->imagen;
    }

    $dat = array(
        'id'=>$id,
        'usuario'=>$this->input->post('usuario',true),
        'perfil_id'=>$this->input->post('perfil_id',true),
        'nombre'=>$this->input->post('nombre',true),
        'apellido'=>$this->input->post('apellido',true),
        'email'=>$this->input->post('email',true),
        'stock_minimo'=>$this->input->post('password',true),
    );

    if ($this->form_validation->run()==FALSE)
    {
        $data = array('titulo' => 'Error de formulario');
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/head_view', $data);
        $this->load->view('front/navbar_view');
        $this->load->view('modificausuario', $dat);
        $this->load->view('front/footer_view');
    }
    else
    {
        $this->_image_modif();
    }

}






















function nuevo_usuario()
{
     //Genero las reglas de validación
     //name del campo, ¨título, restricciones
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('apellido', 'Apellido', 'required');
    $this->form_validation->set_rules('email', 'Usuario','required|trim|valid_email|is_unique[users.username]');
    $this->form_validation->set_rules('email', 'Usuario','required|trim|valid_email|is_unique[users.username]');
    $this->form_validation->set_rules('reg_password', 'Contraseña','required|xss_clean');
    $this->form_validation->set_rules('re_password', 'Repetir contraseña','required|matches[reg_password]');
    //Mensaje de error si no pasan las reglas
    $this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio</div>');
    $this->form_validation->set_message('matches','<div class="alert alert-danger">La contraseña ingresada no coincide</div>');
    $pass = $this->input->post('re_password',true);
    //Preparo los datos para guardar en la base, en caso de que pase la validación
    //Los datos corresponden a los nombres de mi campos de la base de datos
    $data = array(
        'name'=>$this->input->post('nombre',true),
        'last_name'=>$this->input->post('apellido',true),
        'username'=>$this->input->post('email',true),
        'password'=>md5($pass)
    );
}
