<style>
    button{
        padding:0px;
        margin:0px;
        background:none;
        border:none;
    }
    button:focus {outline:0;}
</style>

<div class="container-fluid" style="padding: 0px; margin-top: 0px;background: black">
    <nav class="navbar navbar-inverse" style="padding: 0px; margin: 0px">  
        <div class="container-fluid" id="gg">
            <div class="navbar-header">
                <a class="navbar-brand" href="default.php" style="color:aliceblue">Leaving Certificate Application Portal</a>
            </div>

            <ul class="nav navbar-nav">              
    			
    			<?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                    {
                        ?>
    						<li><a><button id="home">Home</button></a></li>
    					<?php
                    }
                    else
                    {

                    }
                ?>
    		</ul>

            <ul class="nav navbar-nav navbar-right">
                <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                    {
                        ?>
                        <li><a href="logout.php">Log Out</a></li>
                        <?php
                    }
                ?>
            </ul>
        </div>  
    </nav>
</div>