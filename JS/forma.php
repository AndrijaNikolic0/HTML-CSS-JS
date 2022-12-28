<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css.css">


    <form class="row g-3 needs-validation" id="forma" novalidate>
  <div class="col-md-12">
    <label for="ime" class="form-label">Ime</label>
    <input type="text" class="form-control" id="ime" required>
    <div class="invalid-feedback">
      Unesite ime!
    </div>
  </div>
  <div class="col-md-12">
    <label for="prezime" class="form-label">Prezime</label>
    <textarea class="form-control" id="prezime" rows="1" cols="1" required></textarea>
    <!--<input type="text" class="form-control" id="validationCustom02" required>-->
    <div class="invalid-feedback">
      Unesite prezime!
    </div>
  </div>
  <div class="col-md-12">
    <label for="godina_rodjenja" class="form-label">Godina rodjenja</label>
    <!--<div class="input-group has-validation">-->
      <input type="number" class="form-control" id="godina_rodjenja" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Unesite godinu rodjenja!
      </div>
    <!--</div>-->
  </div>
  <div class="col-md-12">
    <label for="adresa" class="form-label">Adresa</label>
    <input type="text" class="form-control" id="adresa" required>
    <div class="invalid-feedback">
      Unesite adresu!
    </div>
  </div>
  <div class="col-md-6">
    <label for="select-grad" class="form-label">Grad</label>
    <select class="form-select" id="select-grad" required>
      <option selected disabled value="">Choose...</option>
      <?php
                                include('Database.php');
                                $database = new Database("korisnici");
                                $sql1 = "select id,name from grad";
                                $rzt1 = $database->conn->query($sql1);

                                while ($grad = mysqli_fetch_assoc($rzt1)) {
                                ?>
                                 <option value="<?php echo $grad['id']; ?>"><?php echo $grad['name']; ?></option>
                             <?php
                                }
                                ?>
    </select>
    <div class="invalid-feedback">
      Izaberite grad!
    </div>

  </div>

  <div class="col-md-6">
    <label for="select-pol" class="form-label">Pol</label>
    <select class="form-select" id="select-pol" required>
      <option selected disabled value="">Choose...</option>
      <?php
                                
                                $sql2 = "select id,name from pol";
                                $rzt2 = $database->conn->query($sql2);

                                while ($pol = mysqli_fetch_assoc($rzt2)) {
                                ?>
                                 <option value="<?php echo $pol['id']; ?>"><?php echo $pol['name']; ?></option>
                             <?php
                                }
                                ?>
    </select>
    <div class="invalid-feedback">
      Izaberite pol!
    </div>
    
  </div>
  
  
  <div class="col-md-6">
    <button class="btn btn-primary" type="reset">Submit form</button>
    <!--<a href="" type="submit"><input type="submit"/></a>-->
  </div>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js.js"></script>