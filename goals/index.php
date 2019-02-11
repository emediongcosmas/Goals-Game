<?php include "template/header.php"; ?>
<?php include "process.php"; ?>


        <div class="container shadow p-3 mb-5 bg-white rounded text-center" id="form" >
            <!-- Start of Bootstrap alert -->
            <!-- alert  warning message to client side -->
                <?php if(isset($message)){ ?>
                    <div class="alert alert-warning alert-dismissable fade show" role="alert">
                        <strong><?php  echo $message;  ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>

                <!-- alert success message to client side -->
                <?php if(isset($success)){ ?>
                    <div class="alert alert-success alert-dismissable fade show" role="alert">
                        <strong><?php  echo $success;  ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
                <!-- End of Bootstrap alert -->

            <form method="POST" action="<?php echo $_SERVER ['PHP_SELF']; ?>">     
                <div class="form-row"> 

                    <div class="form-group col-md-12"> 
                        <input type="text" name="name" class="form-control" placeholder="Name">  
                    </div>

                    <div class="form-group col-md-6"> 
                        <input type="number" name="age" class="form-control" placeholder="Age">  
                    </div>

                    <div class="form-group col-md-6"> 
                        <select class="form-control" id="inputState" name="gender" >
                            <option value="" hidden>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select> 
                    </div>

                    <div class="form-group col-md-6"> 
                        <select class="form-control" id="inputState" name="books_2018">
                            <option value="" hidden>No. of books read in 2018</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6"> 
                        <select class="form-control" id="inputState" name="books_2019" >
                            <option value="" hidden>No. of books to be read in 2019</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6 " > 
                        <select class="form-control" id="inputState" name="skills_2018">
                            <option value= ""hidden>Number of skills acquired in 2018</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6"> 
                        <select class="form-control" id="inputState" name="skills_2019">
                            <option value="" hidden>Number of skills to be acquired in 2019</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6"> 
                        <select class="form-control" id="inputState" name="earning_2018" >
                            <option value="" hidden>How much earned in 2018</option>
                            <option value="1">< ₦100,000</option>
                            <option value="2">₦100,000 - ₦500,000</option>
                            <option value="3">₦500,000 - ₦1M</option>
                            <option value="4">₦1M - ₦5M</option>
                            <option value="5">> ₦5M</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6"> 
                        <select class="form-control" id="inputState" name="earning_2019" >
                            <option value="" hidden>How much to be earned in 2019</option>
                            <option value="1">< ₦100,000</option>
                            <option value="2">₦100,000 - ₦500,000</option>
                            <option value="3">₦500,000 - ₦1M</option>
                            <option value="4">₦1M - ₦5M</option>
                            <option value="5">> ₦5M</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6"> 
                        <select class="form-control" id="inputState" name="current_salary" >
                            <option value="" hidden>Current monthly salary</option>
                            <option value="1">< ₦50,000</option>
                            <option value="2">₦50,000 - ₦100,000</option>
                            <option value="3">₦100,000 - ₦500,000</option>
                            <option value="4">₦500,000 - ₦1M</option>
                            <option value="5">> ₦1M</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6"> 
                        <select class="form-control" id="inputState" name="hardwork" >
                            <option value="" hidden>How hard do you intend to work this year?</option>
                            <option value="Very hard">Very hard</option>
                            <option value="Hard">Hard</option>
                            <option value="Sometimes">Sometimes</option>
                            <option value="Not hard">Not hard </option>
                            <option value="Not at all">Not at all</option>
                        </select>
                    </div>

                    <br>
                    <div class="col-md-12 text-center   ">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>  
            </form>
        </div>


<?php include "template/footer.php"; ?>