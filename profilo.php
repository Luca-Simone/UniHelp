<?php require_once("head.php"); ?>

        </header>
        
        <div class="height"> 
            
            <!--------------------------------------------------------------------------------------

                                              CORPO DELLA PAGINA 

            ---------------------------------------------------------------------------------------->

            <div class="row sfondoSfocato sfondoSfocato2 marginetop" style="margin: 0">
                <div class="col-sm-6 col-sm-offset-3" >
                    <h1 class="titleOther">Profilo</h1>
                </div>
            </div>        
                
<?php if (SESSIONE::attiva()) { ?>
                
            <div class="container marginetop">
                <div class="col-sm-6 col-sm-offset-2" class="view">
                    <h1 class="subTitle">I tuoi dati</h1>
                </div>
            </div>

            <div class="container">
                <div class="col-sm-4 col-sm-offset-1" >

                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h4 class="titolo">Nickname: </h4>
                            <p class="testo">Littleflower</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                                <h4 class="titolo">Email: </h4>
                                <p class="testo" id="email">carolo@email</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h4 class="titolo">Cognome: </h4>
                            <p class="testo">Fiorino</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">	
                            <h4 class="titolo">Nome: </h4>
                            <p class="testo">Carlo</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h4 class="titolo">Università: </h4>
                            <p class="testo">Università di Pisa</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h4 class="titolo">Matricola: </h4>
                            <p class="testo">123456</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h4 class="titolo">Punti accumulati: </h4>
                            <p class="testo">1</p>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <button type="button" class="btn btn-default">Modifica</button>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h4>Se vuoi aggiungere il tuo corso di laurea <a href="corso.php">clicca qui</a>.</h4>
                        </div>
                    </div> 

                    <br>

                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h4>Per modificare la password <a href="cambiopass.php">clicca qui</a>.</h4>
                        </div>
                    </div>

                </div>

                <div class="col-sm-4">
                    <!-- AVATAR UTENTE -->
                    <img src="img\carolo.png" class="img-responsive" style="width:80%; margin-left: auto; margin-right: auto;" alt="Avatar">
                </div> 
            </div>
                
                
<?php } else { ?>
                
            <div class="container marginetop">
                <div class="row">
                    <div style="text-align: center; margin: 5em">
                        <h1>Devi effettuare l'accesso</h1>
                        <h3>Vai al <a href="login.php" >Login</a></h3>
                    </div>
                </div>
            </div>
                
<?php } ?>
            
        </div>  

<?php include("footer.php"); ?>