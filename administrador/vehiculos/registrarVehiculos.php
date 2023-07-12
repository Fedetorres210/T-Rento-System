<?php include("../template/cabecera.php"); ?>
<?php include("./vehiculoTemplate/headerVH.php"); ?> 






<div class="container">
    

    <form class = "frm-register">

        <h1 class="frm-h1">Registro de Vehículos</h1>
        <p class="frm-paragraph">Porfavor ingrese los datos solicitados</p>

        <div class = "form-container">
    
            <div class = "form-group">
                <label class= "form-label" >Placa</label>
                <input type="text" class="form-control" name="placa"  placeholder=" ">
                                
            </div>

            <div class="form-group">
                <label class= "form-label">Marca</label>
                <input type="text" class="form-control" name="marca" placeholder=" ">
                                
            </div>

            <div class="form-group">
                <label class= "form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo" placeholder=" ">
                                
            </div>

            <div class="form-group">
                <label class= "form-label">Año</label>
                <input type="text" class="form-control" name="tiempo" placeholder=" ">
                                
            </div>

            <div class="form-group">
                <label class= "form-label">Color</label>
                <input type="text" class="form-control" name="color" placeholder=" ">
                                
            </div>

            <div class="form-group">
                <label class= "form-label">Valor de Mercado</label>
                <input type="integer" class="form-control" name="color" placeholder=" ">
                                
            </div>

            <div class="form-group">
                <label class= "form-label">Numero de Seguro</label>
                <input type="integer" class="form-control" name="password" placeholder=" ">
                                
            </div>

            <button type="submit" class="rg-submit-bt">Registrar </button>

        </div>

                            

        
    </form>

</div>


<?php include("../template/pie.php"); ?>