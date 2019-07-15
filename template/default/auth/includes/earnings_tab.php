<?php

        $first_withdrawals = LevelIncomeReport::where('owner_user_id', $auth->id)
                                            ->where('commission_type','First withdrawal')
                                            ->where('status','Credit')->sum('amount_earned');
    $earnings = $first_withdrawals + $auth->matured_mavros_worth();
    $bonus = $auth->sum_total_earnings();
    $attempted_withdrawals = $auth->attempted_withdrawals();



    $balance = max (( $earnings + $bonus - $attempted_withdrawals), 0);

;?>

<div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-4">
                        <div class="card card-inverse card-info">
                            <div class="box bg-info text-center">
                                <h3 class="font-light text-white">    <?=$this->money_format($earnings);?>   </h3>
                                <h6 class="text-white">Earnings - <?=$currency;?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-4">
                        <div class="card card-primary card-inverse">
                            <div class="box text-center">
                                <h3 class="font-light text-white">    <?=$this->money_format($bonus);?>   </h3>
                                <h6 class="text-white">Bonus - <?=$currency;?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-4">
                        <div class="card card-inverse card-success">
                            <div class="box text-center">
                                <h3 class="font-light text-white"> <?=$this->money_format($attempted_withdrawals);?>   </h3>
                                <h6 class="text-white">Ghed - <?=$currency;?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                   <!--  <div class="col-md-6 col-lg-4 col-xlg-4">
                        <div class="card card-inverse card-warning">
                            <div class="box text-center">
                                <h3 class="font-light text-white">  <?=$this->money_format($balance);?>   </h3>
                                <h6 class="text-white">Balance - <?=$currency;?></h6>
                            </div>
                        </div>
                    </div> -->
                </div>