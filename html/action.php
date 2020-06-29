<?php
    include('config.php');

    if(isset($_POST['action'])){
        $sql = "SELECT * FROM bikes_info WHERE brand_name !=''";

        if(isset($_POST['brand'])){
            $brand = implode("','", $_POST['brand']);
            $sql .="AND brand_name IN('".$brand."')";
        }

        if(isset($_POST['category'])){
            $category = implode("','", $_POST['category']);
            $sql .="AND category_id IN('".$category."')";
        }

        if(isset($_POST['fuel'])){
            $fuel = implode("','", $_POST['fuel']);
            $sql .="AND type_of_fuel IN('".$fuel."')";
        }

        $result = $conn->query($sql);
        $output = '';

        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $output .='<div class="col-sm-6 col-lg-4 mb-4">
                <div class="card-deck">
                  <div class="card border-secondary">
                    <img width="auto" height="250px" src="'.$row['image'].'" class="card-img-top">
                    <div class="p-2">
                      <h4 style="margin-top:20px;" class="text-dark text-center rounded p-1">
                        '. $row['model_name'].'
                      </h4>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title text-danger">
                        Price : RS.'. $row['price_per_hr'].' /hr
                      </h4>
                      <p class="text-dark">
                        Brand : '. $row['brand_name'].'<br>
                        Mileage : '. $row['mileage'].'<br>
                        Availability : '. $row['count'].' bikes
                      </p>
                      <div>
                        <div class="pull-left">
                          <button class="btn btn-outline-danger"><i class="fa fa-heart-o"></i></button>
                        </div>
                        <div class="pull-right">
                          <button class="btn btn-success btn-block">
                            <a href="#" class="text-light p-4">View Details</a>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>';
            }
        }
        else{
            $output = "<h3>No Bikes Found!</h3>";
        }
        echo $output;
    }
?>
