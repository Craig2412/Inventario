<?php require 'conexion.php' ?>
<div class="menu-wrapper">
                    
        <input type="checkbox" id="myml-menu-toggle"/>
                    
    <nav class="myml-nav" role="complementary">
                        <div class="myml-nav__container">
                            <section class="myml-nav__section myml-nav__section--toggle">
                                <div class="myml-nav__section-heading">
                                    <span class="myml-nav__section-icon">
                                        <label class="myml-nav__toggle" for="myml-menu-toggle">
                                            <svg class="active" viewBox="0 0 512 512">
                                            <path d="M491.318,235.318H20.682C9.26,235.318,0,244.577,0,256s9.26,20.682,20.682,20.682h470.636
                                                c11.423,0,20.682-9.259,20.682-20.682C512,244.578,502.741,235.318,491.318,235.318z"/>
                                        
                                            <path d="M491.318,78.439H20.682C9.26,78.439,0,87.699,0,99.121c0,11.422,9.26,20.682,20.682,20.682h470.636
                                                c11.423,0,20.682-9.26,20.682-20.682C512,87.699,502.741,78.439,491.318,78.439z"/>
                                        
                                            <path d="M491.318,392.197H20.682C9.26,392.197,0,401.456,0,412.879s9.26,20.682,20.682,20.682h470.636
                                                c11.423,0,20.682-9.259,20.682-20.682S502.741,392.197,491.318,392.197z"/>
                                        </label>  
                                    </span>
                                    <p class="myml-nav__section-title">
                                        <span class="myml-nav__user-permalink">REAM&#8482;</span>
                                        <span class="myml-nav__section-subtitle"></span>
                                    </p>
                                </div>
                            </section>

                            <div class="myml-nav__menu">
                                <section class="myml-nav__section myml-nav__section--active ">
                                    <a href="principal.php" class="myml-nav__section-heading">
                                    <span class="myml-nav__section-icon myml-nav__section-icon--myml_summary" checked="">

                                    <img class="icon-menu" src="img/house.png" alt="">        

                                    </span>
                            <p class="myml-nav__section-title">Inicio</p>
                            </a>
                        
                        </section>

                        
                        <section class="myml-nav__section">
                            
                            <input type="checkbox" class="myml-nav__section-toggle-trigger" id="myml-menu-section-toggle-my_purchases" readonly=""/>
                            
                            <span class="myml-nav__section-heading myml-nav__section-heading--has-items">
                                
                                <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_purchases">

                                        <img class="icon-menu" src="img/boxes.png" alt="">

                                    </label>
                                    
                                <label for="myml-menu-section-toggle-my_purchases" class="myml-nav__section-title">Inventario</label>
                                
                            </span>
                            
                            <div class="myml-nav__section-list">
                                
                                <a class="myml-nav__menu-item" href="inventario.php" >
                                    <span class="myml-nav__menu-item-text">PC</span>
                                </a>

                                <a class="myml-nav__menu-item" href="inventario_movil.php" ">
                                    <span class="myml-nav__menu-item-text">Movil</span>
                                </a>
                                

                                <a class="myml-nav__menu-item" href="inventario_laptop.php">
                                    <span class="myml-nav__menu-item-text">Laptop</span>
                                </a>

                                <a class="myml-nav__menu-item" href="inventario_impresora.php">
                                    <span class="myml-nav__menu-item-text">Impresoras</span>
                                </a>

                            </div>
                        </section>
                
                
                
                <section class="myml-nav__section  myml-nav__section--has-active-item">

                    <input type="checkbox" class="myml-nav__section-toggle-trigger" id="myml-menu-section-toggle-my_sales"/>
                    
                    <span class="myml-nav__section-heading myml-nav__section-heading--has-items">
                        
                        <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_sales">

                        <img class="icon-menu" src="img/notes.png" alt="">
                        
                        </label>
                        
                        <label for="myml-menu-section-toggle-my_sales" class="myml-nav__section-title">Registro</label>
                        
                        </span>
                    
                        <div class="myml-nav__section-list">

                            <?php
                                $sel = $conec ->query("SELECT `tablas`.`ID_tabla`, `tablas`.`Nombre_tabla`
                                FROM `tablas`;");
                                while ($fila = $sel -> fetch_assoc()){
                                    echo '<a class="myml-nav__menu-item" href="registro_pre.php?Nombre_tabla=' . utf8_encode($fila['Nombre_tabla']). '"> 
                                        <span class="myml-nav__menu-item-text">'  .utf8_encode($fila['Nombre_tabla']). '</span>
                                        </a>';
                                }
                            ?>  
                            </div>
                </section> 
                    <section class="myml-nav__section  ">
                        <a href="salir.php" class="myml-nav__section-heading">
                        <span class="myml-nav__section-icon myml-nav__section-icon--myml_summary">

                            <img class="icon-menu rotate" src="img/logout.png" alt="">

                        </span>
                <p class="myml-nav__section-title Exit">Salir</p>
                </a>

            </section>

                </div>
            </div>
    </nav>
            <label class="myml-nav__overlay" for="myml-menu-toggle"></label>
</div>