
<div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-info">
                            <div class="box bg-info text-center">
                                <h3 class="font-light text-white">    <?=$this->money_format($auth->earnings());?>   </h3>
                                <h6 class="text-white">Earnings - <?=$currency;?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-primary card-inverse">
                            <div class="box text-center">
                                <h3 class="font-light text-white">    <?=$this->money_format($auth->available_bonus());?>   </h3>
                                <h6 class="text-white">Bonus - <?=$currency;?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-success">
                            <div class="box text-center">
                                <h3 class="font-light text-white"> <?=$this->money_format($auth->attempted_withdrawals());?>   </h3>
                                <h6 class="text-white">Mined - <?=$currency;?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-warning">
                            <div class="box text-center">
                                <h3 class="font-light text-white">  <?=$this->money_format($auth->available_balance());?>   </h3>
                                <h6 class="text-white">Balance - <?=$currency;?></h6>
                            </div>
                        </div>
                    </div>
                </div>