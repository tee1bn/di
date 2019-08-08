

                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-info">
                            <div class="box bg-info text-center">
                                <h3 class="font-light text-white">    <?=$this->money_format($balance['total_mavros']);?>   </h3>
                                <h6 class="text-white">Earnings - <?=$balance['currency']['html_code'];?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-primary card-inverse">
                            <div class="box text-center">
                                <h3 class="font-light text-white">    <?=$this->money_format($balance['total_credits']);?>   </h3>
                                <h6 class="text-white">Bonus - <?=$balance['currency']['html_code'];?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-success">
                            <div class="box text-center">
                                <h3 class="font-light text-white"> <?=$this->money_format($balance['total_ghs']);?>   </h3>
                                <h6 class="text-white">Ghed - <?=$balance['currency']['html_code'];?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-warning">
                            <div class="box text-center">
                                <h3 class="font-light text-white">  <?=$this->money_format($balance['available_balance']);?>   </h3>
                                <h6 class="text-white">Balance - <?=$balance['currency']['html_code'];?></h6>
                            </div>
                        </div>
                    </div>
