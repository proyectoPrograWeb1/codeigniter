<?php
class Student_delete extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    function index()
    {
        //con este array enviamos los datos a mostrar a la vista
        $data['comentarios'] = $this->eliminar_model->getComentarios();
        $this->load->view('eliminar_view', $data);
    }
    
   //función para eliminar un mensaje dependiendo del id
    function borrar_comentario()
    {
        $id = $this->uri->segment(3);
        $delete = $this->eliminar_model->eliminar_comentario($id);
        redirect(base_url().'eliminar');
    }
}

No hay mucho que explic