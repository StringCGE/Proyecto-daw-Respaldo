<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Formulario Registro</title>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <header class="big-header-formulario">
                <?php
				include('comun/NavPrincipal.php');
				?>
				<?php
				include('comun/Nav_CRUD.php');
				nav_crud('Cantos');
				?>
        </header>
        <main>
            <div class="container-form">
                <h1 id="id">Encuesta protocolo covid</h1>
                <form class="form" id="form" method="post" action="./Cantos_04_CRUD_Registrar.php">
                    <!-- Nombres -->
                    <div class="forms_field"  id="form_name">
                        <label for="name" class="form_label">Nombres:</label>
                        <div class="form_group_inputs">   
                            <input type="text" class="form_input" id="name" name="name" placeholder="James Douglas">
                            <i class="form_validation "></i>          
                        </div>
                        <p class="form_input-error">El nombre solo puede tener letras.</p>
                    </div>
                    <!-- Apellidos -->
                    <div class="forms_field"  id="form_sur_name">
                        <label for="sur_name" class="form_label">Apellidos:</label>
                        <div class="form_group_inputs">   
                            <input type="text" class="form_input" id="sur_name" name="sur_name" placeholder="Cantos Pinto">
                            <i class="form_validation "></i>
                            
                        </div>
                        <p class="form_input-error">El apellido solo puede tener letras.</p>
                    </div>
                    <!-- Correo -->
                    <div class="forms_field" id="form_email">
                        <label  for="email" class="form_label">Email:</label>
                        <div class="form_group_inputs">
                            <input type="email" class="form_input" id="email" name="email" placeholder="james@james.com">
                            <i class="form_validation "></i>
                        </div>
                        <p class="form_input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                    </div>
                    <!-- Question -->
                    <div class="forms_field" id="form_question">
                        <label class="form_label">??Esta vacunado?</label>
                        <div class="form_group_inputs">
                            <label>Si
                                <input type="radio" id="question1" name="vacuna" value="si"  >
                            </label> 
                            <label>No
                                <input type="radio" id="question2" name="vacuna" value="no"  >
                            </label>
                        </div>
                        <p class="form_input-error">Escoge una opci??n.</p>
                    </div>
                    <!-- Numero de mascarillas -->
                    <div class="forms_field" id="form_number_mask" >
                        <label class="form_label">??Cuantas mascarillas lleva para el viaje?</label>
                        <div class="form_group_inputs">
                           <input type="number" value="1" min="1" max="9" maxlength="1" name="mask" id="number" class="form_input" oninput="maxlengthNumber(this);"> 
                        </div>
                        <p class="form_input-error">Puedes escoger de 1 a 5 mascarillas para el viaje.</p>
                    </div>
                    <!-- Lavado de manos -->
                    <div class="forms_field" id="form_washing">
                        <label class="form_label">??Qu?? tan frecuente es su lavado de manos?</label>
                        <div class="form_group_inputs">
                            <input type="range" class="form_input" id="form_input" name="range_washs" step="5" min="0" max="25">   
                        </div>                        
                        <p class="form_input-error">??cuantas veces al dia te lavas las manos?</p>
                    </div>
                    <!-- Terminos -->
                    <div class="forms_field-terms" id="form_term" >
                        <label class="form_label">Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></label>
                        <div class="form_group_inputs">
                        <input class="form_checkbox" type="checkbox" name="terms" id="terms">
                        </div>
                        <p id="form_input-error" class="form_input-error"></p>
                    </div>
                    <!-- Mensaje advertencia -->
                    <div class="form_msj" id="form_msj">
                        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                    </div>
                    <!-- Boton -->
                    <div class="forms_fields-button">
                        <button type="submit" class="button">Enviar</button> 
                        <p class="form_msj-exito" id="form_msj-exito">Formulario enviado exitosamente!</p>  
                    </div>                    
                 </form>
             </div>
        </main>
                
                <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
                <script>

                      function maxlengthNumber (obj) {
                        if (obj.value.length > obj.maxLength) {
                        
                            obj.value = obj.value.slice(1, obj.maxLength);   
                        }   
                    }
                    </script> 
            <div>
                <footer>
                    <img class="logo" src="assets/img/logo.png" alt="logo">
                    <div class="social-networks">
                        <div>
                            <img src="assets/img/facebook.png" alt="facebook">
                            <span>Facebook</span>
                        </div>
                        <div>
                            <img src="assets/img/instagram.png" alt="instagram">
                            <span>Instagram</span>
                        </div>
                        <div>
                            <img src="assets/img/twitter.png" alt="twitter">
                            <span>Twitter</span>
                        </div>   
                    </div>
                    <div class="info-footer">              
                    </div> 
                </footer>  
            </div> 
    </body>
</html>
