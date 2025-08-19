<?php 
include('config.php');


if(empty($_SESSION['email'])){
    header('Location:candidatelogin.php');
}
include('userheader.php');
?>

    <div class="move ">

        <div class="box text-black btn-get-started">
            <h1 id="firstquote">Hii,
                 <span id="user"> 
                    <b> <?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?> !
                    </b>
                 </span> 
            </h1>
            <p class="">
                <h4 id="firstquote">Welcome to the first step of your journey <br>—where your dreams meet 
                the opportunity to create a  <br>future you love.</h4>
            </p>
        </div>


    </div>




<?php include("footer.php") ?>