
<?php
    
    
    $page_title = "How it works";
    include 'includes/header.php';

    $settings = SiteSettings::site_settings();

    ;?>



    <!--== About Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>How it works.</h2>
                        <!-- <p>Hare is some informaton on our company and teme member information to yoiu know</p> -->
                    </div>
                </div>
            </div>
         <div class="col-lg-12">

            <div class="col-md-12 philosophy-div2 animated bounceInRight delay-500 go">
          
                    <p style="text-align: justify"><?=project_name;?> is a community of people providing each other financial help on the principle of gratuitousness, reciprocity and benevolence. In <?=project_name;?> you don’t have to make contracts or pledge your property. In <?=project_name;?> there are no lenders and no debtors. Everything is very simple: one participant asks for help — another one helps. The only thing that <?=project_name;?> demands from its participants is to be honest and kind to each other. You ask for financial help when you need it, you give financial help when you are able to do it.<br><br>

In <?=project_name;?> there is no central account where all the money in the system flows to (and where it can be easily stolen from). All the money is in the bank accounts belonging to the members only! The members transfer funds to each other directly, without intermediaries! In fact, <?=project_name;?> only regulates the process and nothing else. So the entire system belongs to people. No kidding! It is a real mutual aid fund where ordinary people help each other.<br><br>

<strong>How does it work technically?</strong> You declare your willingness to provide help (click “Provide Help” in your Personal Office (hereinafter PO), after which your account is rewarded with an amount in Mavro (internal "currency"/scores in the system). Once another participant confirms the receipt of the money from you (your PH-request gets the status “Confirmed”), Mavro start growing at the rate of <?=$settings['percent_roi'];?>%. Growth stops at exactly <?=$settings['ph_maturity_in_days'];?> days. The amount in Mavro increases as soon as the PH is completed. ie all the amount pleged as been received and confirmed by receiving members. However, if you do not provide help within 48hrs after you have been matched or your contribution is not confirmed within 48hrs of payment, The match will be cancelled automatically, the help Provider will be blocked from the system while the Help Receiver will be rematched to another member.
<br><br>

Should you have any questions regarding the topic, our online consultants are willing to help and answer all of your questions.<br><br>

Please note that the use of the words <?=$settings['percent_roi'];?>% in <?=$settings['ph_maturity_in_days'];?> days cannot be considered as a yield or interest rate since the funds are given away; we are not earning anything (we are a mutual-aid fund), and nobody promises or guarantees to pay it! Read over <strong>THE WARNING.</strong></p><br><br>

<h4>COMMITTMENT POLICY</h4>
<ul class="ordered-list" style="text-align: justify; margin-right: 150px !important">
<li>Kindly note that to foster committment, <?=$settings['percent_down_payment'];?>% of the Help pledge is matched instantly as downpayment. Remaining plegdes will be matched later.</li>
<br>
<li>The sustenability of the platform is built on committment of its members. Every member must Provide Help not less than <?=$settings['percent_of_last_gh'];?>% of their last GH. You can Provide more!.</li><br>
</ul> <br>


REFERRAL BONUS


<h4>REFERRAL BONUS</h4>
 
<p style="text-align: justify">
Participants will not be credited with a Referral Bonus from the amount of the contribution made by each new member (referral) you invited to the System. Referral bonuses are considered to be excesses on the system and contributes a massive debt to the sustainability of the system. You can invite a participant through a referral link or <?=project_name;?> username.
<br><br>

<b>ATTENTION!</b> 
You don't have to invite new people to the system! Should you invite anyone? That's good for the smooth running and health of the system, if you do not? It is OK. You are free to participate without attracting new members.


</p><br><br>




                    
                </div>

                </div>
        </div>

   
    </section>
    <!--== About Area End ==-->


   

   <?php include 'includes/footer.php';?>