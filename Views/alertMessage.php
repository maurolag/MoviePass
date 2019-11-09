<<<<<<< HEAD

<?php 
if(isset($alertType)){
    if($alertType == "danger"){
        echo '<span id="alert" class="alert alert-danger alert-dismissible fade show">';if (isset($alertMessage)) echo $alertMessage;
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </span>';
    }else if($alertType == "success"){
        echo '<span id="alert" class="alert alert-success alert-dismissible fade show">';if (isset($alertMessage)) echo $alertMessage;
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </span>';
    } else {
        echo '<span id="alert" class="alert alert-warning alert-dismissible fade show">';if (isset($alertMessage)) echo $alertMessage;
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </span>';
    }
    
   
}else{
    echo '<span id="alert" class="alert alert-primary alert-dismissible fade show">';if (isset($alertMessage)) echo $alertMessage;
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </span>';
}
?>




=======
<span id="alert" class="alert alert-danger alert-dismissible fade show"><?php if (isset($alertMessage)) echo $alertMessage ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</span>
>>>>>>> a629bcf28b60327dfdc257b544180e5a16d03369

<script>
    $(document).ready(function() {

          validateAlert("alert", <?php if (isset($alertMessage)) {
                    echo "'" . $alertMessage . "'";
               } else {
                    echo "''";
               } ?>)

    });
</script>


<style>

#alert {
          display: block;
          width: 80%;
          margin-top: 2%;
     }

</style>