<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            
               
    <div class="card-header">
        <h5 class="card-title">View All Bikes </h5>
    </div>
    <div class="card-body content">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Brand</th>
                <th>Fule Tank</th>
                <th>Max Power</th>
                <th>Max Torque</th>
                <th>Transmission</th>
                <th>Utility</th>
            </tr>
        </thead>
        <tbody>
    <?php $bikes=$admin->get_all_bikes();
    foreach($bikes as $k=>$v){
    ?>
   
            <tr>
              
            <td><?php echo $bikes[$k]['name'];?></td>
                <td><?php echo $bikes[$k]['brand'];?></td>
                <td><?php echo $bikes[$k]['fuel tank capacity'];?></td>
                <td><?php echo $bikes[$k]['max power'];?></td>
                <td><?php echo $bikes[$k]['max torque'];?></td>
                <td><?php echo $bikes[$k]['transmission'];?></td>
                <td> <i class="ti ti-pencil btn btn-xs btn-warning"></i> <i class="ti ti-trash btn btn-xs btn-danger"></i></td>
            </tr>
            

            <?php }?>
        </tbody>
        
    </table>
    
    </div>
</div>



                  </div>

                </div>
                
               
              </div>
            </div>
          </div>
        </div>
      </div>