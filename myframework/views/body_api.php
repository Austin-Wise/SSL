<div class="container">
<div class="row">
<?
            foreach($data as $item){
?>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-20">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="<?echo $item["volumeInfo"]["previewLink"]?>"><?echo $item["volumeInfo"]["title"]?></a>
                    </h4>
                    <p class="card-text"><?echo $item["volumeInfo"]["description"]?></p>
                  </div>
                </div>
              </div>      
<?}?>
    </div>
  </div>