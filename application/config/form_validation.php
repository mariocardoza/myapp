<?php
/**
 * Reglas de validacion para formularios
 */
$config = array(
       
        /**
         * add_formulario
         * */
        'add_formulario'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim|max_length[30]'),
            array('field' => 'precio','label' => 'Precio','rules' => 'required|numeric|trim'),
            array('field' => 'stock','label' => 'Stock','rules' => 'required|integer|trim'),
            array('field' => 'fecha','label' => 'Fecha','rules' => 'required|trim'),
            
        ), 

        'add_usuarios'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim|max_length[30]'),
            array('field' => 'correo','label' => 'Correo','rules' => 'required|valid_email|trim'),
            array('field' => 'telefono','label' => 'Telefono','rules' => 'required|trim'),
            array('field' => 'pass','label' => 'Contraseña','rules' => 'required|trim'),
            array('field' => 'cargo','label' => 'Cargo','rules' => 'required|trim'),
            
        ), 
        
         'edit_usuarios'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim|max_length[30]'),
            array('field' => 'correo','label' => 'Correo','rules' => 'required|valid_email|trim'),
            array('field' => 'telefono','label' => 'Telefono','rules' => 'required|trim'),  
            array('field' => 'cargo','label' => 'Cargo','rules' => 'required|trim'), 
        ), 

        'login'
        => array(
            
            array('field' => 'correo','label' => 'Correo Electronico','rules' => 'required|valid_email'),
            array('field' => 'pass','label' => 'Contraseña','rules' => 'required|trim'),
        ),
        
        /**
         * elefante
         * */
        'elefante'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim|max_length[5]'),
            array('field' => 'correo','label' => 'E-Mail','rules' => 'required|is_string|trim|valid_email'),
            
        ), 
        
        
        /**
         * manzana
         * */
        'manzana'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim|xss_clean|max_length[5]'),
            array('field' => 'correo','label' => 'E-Mail','rules' => 'required|is_string|trim|xss_clean|valid_email'),
            
        ),
   
   //éste es el final      
);
