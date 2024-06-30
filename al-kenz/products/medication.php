<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Kenz Pharmaceutical</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./../styles/animate.min.css" />
    <link href="./../styles/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./../styles/owl.carousel.min.css" />
    <link rel="stylesheet" href="./../styles/owl.theme.default.min.css" />
    <link rel="stylesheet" href="./../styles/init.css" />
    <link rel="stylesheet" href="./../styles/common.css" />
    <link rel="stylesheet" href="./../styles/site.css" />

</head>
<body>

    <?php include_once('./../inc/header.inc') ?>

    <section class="ak-container ak-inner-banner" style="background-image: url('<?php echo $actual_link; ?>/assets/images/inner-banner.png');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="innerLayer"></div>
                    <h1>Medication</h1>
                    <ul>
                        <li><a href="index.php">Home</a> &gt;</li>
                        <li><a href="./../products.php">Products</a> &gt;</li>
                        <li>Medication</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-inner-product-list">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="category-nav-group">

                        <?php  $product = isset( $_GET['product'] ) ? $_GET['product'] : 'ANTIBIOTIC'; ?>

                        <ul class="product-category owl-carousel owl-theme">
                            <li class="item <?php if( $product == 'CARDIOVASCULAR DRUGS' ) { echo 'active'; } ?>">CARDIOVASCULAR DRUGS</li>
                            <li class="item <?php if( $product == 'EYE DROPS' ) { echo 'active'; }  ?>">EYE DROPS</li>
                            <li class="item <?php if( $product == 'ANTIBIOTIC' ) { echo 'active'; } ?>">ANTIBIOTIC</li>
                            <li class="item <?php if( $product == 'NEUROLOGICAL AND PSYCHOLOGICAL DRUGS' ) { echo 'active'; } ?>">NEUROLOGICAL AND PSYCHOLOGICAL DRUGS</li>
                            <li class="item <?php if( $product == 'ANTICOAGULANTS' ) { echo 'active'; } ?>">ANTICOAGULANTS</li>
                            <li class="item <?php if( $product == 'PAIN MANAGEMENT' ) { echo 'active'; } ?>">PAIN MANAGEMENT</li>
                            <li class="item <?php if( $product == 'AGAINST INFLUENZA' ) { echo 'active'; } ?>">AGAINST INFLUENZA</li>
                            <li class="item <?php if( $product == 'OTHERS' ) { echo 'active'; } ?>">OTHERS</li>
                        </ul>
                        <div class="nav-group">
                            <span class="prev js_prev">
                                <img src="./../assets/icons/prev.svg" alt="">
                            </span>
                            <span class="next js_next">
                                <img src="./../assets/icons/next.svg" alt="">
                            </span>
                        </div>

                    </div>


                </div>
            </div>

            <?php

                $list = array(
                    "CARDIOVASCULAR DRUGS" => array(
                        array(
                            "name" => "propranolol hydrochloride",
                            "desc" => "Tablets 10 Mg <br/> Tablets 40 Mg"
                        ),
                        array(
                            "name" => "Atorvastatin",
                            "desc" => "Tablets Film Coated 10mg <br/> Tablets Film Coated 20mg <br/> Tablets Film Coated 40mg"
                        ),
                        array(
                            "name" => "Betaxolol",
                            "desc" => "Betaxolol 20 Mg Film-Coated Tablets, Pack Of 30"
                        ),
                        array(
                            "name" => "Enalapril",
                            "desc" => "Tablets 0,01g №20<br/> Tablets 0,005g №20"
                        ),
                        array(
                            "name" => "Bisoprolol",
                            "desc" => "Tablets 10mg №50<br/> Tablets 5mg №30<br/> Tablets 2,5mg №30"
                        ),
                        array(
                            "name" => "Captopril",
                            "desc" => "Tablets 25 Mg №20"
                        ),
                        array(
                            "name" => "Verapamil",
                            "desc" => "Solution For Introvenous Injection 2,5 Mg/Ml 2 Ml №10"
                        ),
                        array(
                            "name" => "Dibazol",
                            "desc" => "Solution For Injections 0,5% 2 Ml №10, Solution For Injections 1% 5ml №10"
                        ),
                        array(
                            "name" => "Perindopril",
                            "desc" => "Tablets 4 Mg №30<br/> Tablets 8 Mg №30"
                        ),
                        array(
                            "name" => "Rosuvastatin",
                            "desc" => "Tablets Film Coated 5mg № 30<br/> Tablets Film Coated 10mg № 30<br/> Tablets Film Coated 20mg № 30"
                        ),
                        array(
                            "name" => "Torasemide",
                            "desc" => "Tablets 5mg<br/> Tablets 10mg"
                        ),
                        array(
                            "name" => "Epinephrine",
                            "desc" => "Adrenaline Solution For Injections 1mg/Ml, 1 Ml Ampules, Pack Of 5"
                        ),
                        array(
                            "name" => "Riboxinum",
                            "desc" => "Solution For Intravenous Injections 20mg/Ml 10ml №10, Ampules, Solution For Intravenous Injections 20mg/Ml 5ml №10, Ampules"
                        ),
                        array(
                            "name" => "Valsartan",
                            "desc" => "Film Coated Tablets 40 Mg №30<br/> Film Coated Tablets 80 Mg №30<br/> Film Coated Tablets 160 Mg"
                        ),
                        array(
                            "name" => "Nebivolol",
                            "desc" => "Tablets 5 Mg №28"
                        ),
                        array(
                            "name" => "Clopidogrel Plus",
                            "desc" => "Film Coated Tablets, 100 Mg+75 Mg №28"
                        ),
                        array(
                            "name" => "Lerkanidipin",
                            "desc" => "Film Coated Tablets 10 Mg №30<br/> Film Coated Tablets 20 Mg №30"
                        ),
                        array(
                            "name" => "Moxonidin№",
                            "desc" => "Film Coated Tablets 0,2 Mg №28<br/> Film Coated Tablets 0,4 Mg №28"
                        ),
                        array(
                            "name" => "Pentoxifylline",
                            "desc" => "Tablets 400 Mg №20"
                        ),
                    ),
                    "EYE DROPS" => array(
                        array(
                            "name" => "Betaxolol",
                            "desc" => "Betaxolol 0.5% Eye Drops, 5 Ml Polymer Tube Droppers, Pack Of 1"
                        ),
                        array(
                            "name" => "Timolol",
                            "desc" => "Timolol 0.5% Eye Drops, 5 Ml Polymer Tube Droppers, Pack Of 1"
                        ),
                        array(
                            "name" => "Tropicamide",
                            "desc" => "Tropicamide 0.1% Eye Drops, Pack Of 1<br/>Tropicamide 0.05% Eye Drops, Pack Of 1"
                        ),
                        array(
                            "name" => "Taurine",
                            "desc" => "Taufon 4% Eye Drops, 1,5 Ml Polymer Tube Droppers, Pack Of 5<br/>Taufon 4% Eye Drops, 10 Ml Bottle Droppers, Pack Of 1"
                        ),
                        array(
                            "name" => "Levofloxacin",
                            "desc" => "Levofloxacin 0,5% Eye Drops, 5 Ml Bottle Droppers, Pack Of 1"
                        ),
                        array(
                            "name" => "Sulfacetamide",
                            "desc" => "Sulfacyl Sodium 20% Eye Drops In 1,5 Tube Droppers, Pack Of 2"
                        ),
                        array(
                            "name" => "Atropine",
                            "desc" => "Atropine 1% Eye Drops, 5ml Bottle, Pack Of 1"
                        ),
                        array(
                            "name" => "Lidocaine",
                            "desc" => "Lidocaine 2% Eye Drops, 1,5 Ml Polymer Tube Droppers, Pack Of 5"
                        ),
                        array(
                            "name" => "Pilocarpine",
                            "desc" => "Pilocarpine 1 % Eye Drops. 1.5 Ml In Polymer Tube Droppers, Pack Of 5<br/>Pilocarpine 1 % Eye Drops. 5 Ml In Bottle Droppers, Pack Of 1"
                        ),
                        array(
                            "name" => "Proxofelin",
                            "desc" => "Proxofelin 1% Eye Drops, 1,5 Ml Polymer Tube Droppers, Pack Of 5"
                        )
                    ),
                    "ANTIBIOTIC" => array(
                        array(
                            "name" => "Ampicillin",
                            "desc" => "Powder For Solution For Introvenous And Intromuscular Injection 0,5 G"
                        ),
                        array(
                            "name" => "Ampicillin Trihydrate",
                            "desc" => "Tablets 0.25 G, №10<br/>Tablets 0,25g №20"
                        ),
                        array(
                            "name" => "Clarithromycin",
                            "desc" => "Tab. 250mg 10<br/>Tab. 500mg 10"
                        ),
                        array(
                            "name" => "Azithromycin",
                            "desc" => "Tablets 500mg №3"
                        ),
                        array(
                            "name" => "Biotaksim",
                            "desc" => "Powder For Solution For Introvenous And Intromuscular Injection 1,0 G."
                        ),
                        array(
                            "name" => "Cefazolin",
                            "desc" => "Powder For Solution For Introvenous And Intromuscular Injection 1,0 G."
                        ),
                        array(
                            "name" => "Cefoperazone",
                            "desc" => "Powder For Solution For Introvenous And Intromuscular Injection 1,0 G."
                        ),
                        array(
                            "name" => "Cefotaxime",
                            "desc" => "Powder For Solution For Introvenous And Intromuscular Injection 1,0 G For Hospitals<br/>Powder For Solution For Introvenous And Intromuscular Injection 1,0 G For Hospitals"
                        ),
                        array(
                            "name" => "Ceftazidime",
                            "desc" => "Powder For Preparation Of Solution For Intravenous And Intramuscular Introduction 1,0g №1 (Flacon)"
                        ),
                        array(
                            "name" => "Ceftriaxone",
                            "desc" => "Powder For Solution For Introvenous And Intromuscular Injection 1,0 G For Hospitals<br/>Powder For Solution For Introvenous And Intromuscular Injection 1,0 G For Hospitals<br/>Powder For Preparation Of Solution For Intravenous And Intramuscular Introduction 1g №1 (Flacon)"
                        ),
                        array(
                            "name" => "Cefuroxime",
                            "desc" => "Powder For Solution For Introvenous And Intromuscular Injection 0,75 G."
                        ),
                        array(
                            "name" => "Nystatin",
                            "desc" => "Rectal Suppositories 500,000 IU№ 10<br/>Film-Coated Tablets, 250000 UI №20<br/>Film-Coated Tablets, 500000 UI №20<br/>Ointment For External Use 100000UI/G 30g<br/>Vaginal Suppositories 250,000 IU №10<br/>Vaginal Suppositories 500,000 IU №10<br/>Rectal Suppositories 250,000 IU № 10"
                        ),
                        array(
                            "name" => "Levofloxacin",
                            "desc" => "Tab. 500mg №10"
                        ),
                        array(
                            "name" => "Erythromycin",
                            "desc" => "Enteric-Coated Tablets, 100 Mg №10<br/>Tablets, Enteric-Coated Tablets, 250 Mg №10<br/>Ointment For External Use Of 10,000UI /G 15g"
                        ),
                        array(
                            "name" => "Tetracycline",
                            "desc" => "Film-Coated Tablets, 100 Mg №20<br/>Ointment For External Use 3% 15g"
                        ),
                        array(
                            "name" => "Tetracycline With Nystatin",
                            "desc" => "Coated Tablets, 100 Mg + 22,2 Mg №10"
                        ),
                        array(
                            "name" => "Benzylpenicillin",
                            "desc" => "Powder For Solution For Introvenous And Intromuscular Injection1 000 000 UI"
                        ),
                        array(
                            "name" => "Biokson",
                            "desc" => "Powder For Solution For Introvenous And Intromuscular Injection 1,0 G."
                        ),
                        array(
                            "name" => "Co-Trimoxazole",
                            "desc" => "Tablets 480 Mg №20"
                        ),
                        array(
                            "name" => "Ftalazol (Sulfonamides)",
                            "desc" => "Tablets 500 Mg №10"
                        ),
                        array(
                            "name" => "Fuzidin-Sodium",
                            "desc" => "Enteric-Coated Tablets 250 Mg №20<br/>Enteric-Coated Tablets, 125 Mg №20"
                        ),
                        array(
                            "name" => "Griseofulvin",
                            "desc" => "Tablets 125mg №20"
                        ),
                        array(
                            "name" => "Soniazid",
                            "desc" => "Solution For Injections 10% 5 Ml №10<br/>Tablets 300 Mg №100"
                        ),
                        array(
                            "name" => "Ofloxacin",
                            "desc" => "Tab. 400mg"
                        ),
                        array(
                            "name" => "Meropenem",
                            "desc" => "Powder For Preparation Of Solution For Intravenous Administration 0,5g №1 (Flacon)"
                        )
                    ),
                    "NEUROLOGICAL AND PSYCHOLOGICAL DRUGS" => array(
                        array(
                            "name" => "Buprenorphine",
                            "desc" => "Bupranal Solution For Injections 0.3 Mg/Ml, 1 Ml Ampules, Pack Of 10"
                        ),
                        array(
                            "name" => "Buprenorphine + Naloxone",
                            "desc" => "Bupraxone Sublingual Tablets, Pack Of 20"
                        ),
                        array(
                            "name" => "Diazepam",
                            "desc" => "Sibazon Solution For Intravenous Or Intramuscular Injection 5 Mg/Ml In 2-Ml Ampules, Pack Of 5<br/>Sibazon 5 Mg Tablets, Pack Of 20"
                        ),
                        array(
                            "name" => "Clonazepam",
                            "desc" => "Clonazepam 0.5 Mg Tablets, Pack Of 30<br/>Clonazepam 2.0 Mg Tablets, Pack Of 30"
                        ),
                        array(
                            "name" => "Clozapine",
                            "desc" => "Clozapine 25 Mg Tablets, Pack Of 50<br/>Clozapine 100 Mg Tablets, Pack Of 50"
                        ),
                        array(
                            "name" => "Naloxone",
                            "desc" => "Naloxone Soluttion For Injections 0.4 Mg/Ml, 1ml Ampules, Pack Of 10"
                        ),
                        array(
                            "name" => "Naltrexone",
                            "desc" => "Naloxone Soluttion For Injections 0.4 Mg/Ml, 1ml Ampules, Pack Of 10"
                        ),
                        array(
                            "name" => "Fentanyl",
                            "desc" => "Fentanyl Transdermal Therapeutic System (TTS) 12,5 Mcg/H, Pack Of 5<br/>Fentanyl Transdermal Therapeutic System (TTS) 25 Mcg/H, Pack Of 5<br/>Fentanyl Transdermal Therapeutic System (TTS) 50 Mcg/H, Pack Of 5<br/>Fentanyl Transdermal Therapeutic System (TTS) 75 Mcg/H, Pack Of 5<br/>Fentanyl Transdermal Therapeutic System (TTS) 100 Mcg/H, Pack Of 5<br/>Fentanyl Solution For Intravenous Or Intramuscular Injection 50 Âµg/Ml, 1ml Ampules, Pack Of 5<br/>Fentanyl Solution For Intravenous Or Intramuscular Injection"
                        ),
                        array(
                            "name" => "Ketamine",
                            "desc" => "etamine Solution For Intravenous Or Intramuscular Injection 50 Mg/Ml, 2ml Ampules, Pack Of 5"
                        ),
                        array(
                            "name" => "Morphine",
                            "desc" => "Morphine Solution For Injections 10 Mg/Ml, 1ml Ampules, Pack Of 10"
                        ),
                        array(
                            "name" => "Midazolam",
                            "desc" => "Midazolam Solution For Intravenous And Intramuscular Injection, 5 Mg/Ml In 3-Ml Ampules, Pack Of 5<br/>Midazolam Solution For Intravenous And Intramuscular Injection, 5 Mg/Ml In 1-Ml Ampules, Pack Of 10"
                        ),
                        array(
                            "name" => "Nitrazepam",
                            "desc" => "Nitrazepam 5 Mg Tablets, Pack Of 20"
                        ),
                        array(
                            "name" => "Sodium Oxybate",
                            "desc" => "Sodium Oxybate Solution For Intravenous Or Intramuscular Injection 200 Mg/Ml, 5ml Ampules, Pack Of 5"
                        ),
                        array(
                            "name" => "Nalbuphine",
                            "desc" => "Nalbuphine Solution For Injections, 20 Mg/Ml, 1ml Ampules, Pack Of 5"
                        ),
                        array(
                            "name" => "Morphine - Codeine - Noscapine - Papaverine - Thebaine",
                            "desc" => "Omnopon Solution For Subcutaneous Injection 0.72+5.75+2.7+0.36 +0.05 Mg/Ml, 1ml Ampules, Pack Of 5<br/>Omnopon Solution For Subcutaneous Injection 1.44+11.5+5.4+0.72+0.1 Mg/Ml, 1ml Ampules, Pack Of 5"
                        ),
                        array(
                            "name" => "Trimeperidine",
                            "desc" => "Promedol Solution For Injections 10 Mg/Ml, 1 Ml Ampules, Pack Of 10<br/>Promedol Solution For Injections 20 Mg/Ml, 1ml Ampules<br/>Promedol Solution For Injections 20 Mg/Ml 1-Ml Syrettes, Pack Of 100"
                        ),
                        array(
                            "name" => "Phenobarbital",
                            "desc" => "Phenobarbital 100 Mg Tablets, Pack Of 10"
                        ),
                        array(
                            "name" => "Benzobarbital",
                            "desc" => "Benzonal 100 Mg Tablets, Pack Of 50"
                        ),
                        array(
                            "name" => "Amitriptyline",
                            "desc" => "Amitriptyline Solutions For Intravenous And Intramuscular Injections 10mg/Ml, 2ml Ampules, Pack Of 10<br/>Amitriptyline 25 Mg Tablets, Pack Of 50"
                        ),
                        array(
                            "name" => "Droperidol",
                            "desc" => "Droperidol Solution For Injections 2.5 Mg/Ml, 2ml Ampules, Pack Of 5<br/>Droperidol Solution For Injections 2.5 Mg/Ml, 5ml Bottles, Pack Of 5"
                        ),
                        array(
                            "name" => "Trihexyphenidyl",
                            "desc" => "Trihexyphenidyl 2 Mg Tablets, Pack Of 50"
                        ),
                        array(
                            "name" => "Aminophenyl Butyric Acid",
                            "desc" => "Phenibut 250 Mg Tablets, Pack Of 20"
                        ),
                        array(
                            "name" => "Tramadol",
                            "desc" => "Tramadol Solution For Injections 50 Mg/Ml In 1-Ml Ampules, Pack Of 5<br/>Tramadol Solution For Injections 50 Mg/Ml In 2-Ml Ampules, Pack Of 5<br/>Tramadol 50 Mg Capsules, Pack Of 20"
                        ),
                        array(
                            "name" => "Risperidone",
                            "desc" => "RISPERIDONE Tab. 2mg №20"
                        )
                    ),
                    "ANTICOAGULANTS" => array(
                        array(
                            "name" => "Enixum",
                            "desc" => "Solution For Introduction 10 000 Anti-№№ M№/Ml 1,0 Ml №10 AmpoulesSolution For Introduction 10 000 Anti-№№ M№/Ml 0,3 Ml №10<br/>Solution For Introduction 10 000 Anti-№№ M№/Ml 0,5 Ml №10<br/>Solution For Introduction 10 000 Anti-№№ M№/Ml 0,2 Ml №10 Ampoules<br/>Solution For Introduction 10 000 Anti-№№ M№/Ml 0,3 Ml №10 Ampoules<br/>Solution For Introduction 10 000 Anti-№№ M№/Ml 0,4 Ml №10 Ampoules<br/>Solution For Introduction 10 000 Anti-№№ M№/Ml 0,5 Ml №10 Ampoules<br/>Solution For Introduction 10 000"
                        ),
                        array(
                            "name" => "Heparin",
                            "desc" => "Ointment For External Use 25 G<br/>Heparin Solution For Intravenous And Subcutaneous Administration 5000 ME/Ml, 5ml Bottles, Pack Of 5"
                        ),
                        array(
                            "name" => "Haemodesum-8000",
                            "desc" => "Solution For Infusion 200 Ml<br/>Solution For Infusion 400 Ml"
                        ),
                        array(
                            "name" => "Vikasol",
                            "desc" => "Solution For Intromuscular Injection 10 Mg/Ml 2 Ml №10 <br/>Tablets 15 Mg №30"
                        ),
                    ),
                    "PAIN MANAGEMENT" => array(
                        array(
                            "name" => "Amelotex",
                            "desc" => "1% Gel Tube 30g<br/>1% Gel Tube 50<br/>Solution For Intramuscular Introduction 15 Mg №Mp. 1,5ml №5<br/>Solution For Intramuscular Introduction 15 Mg №Mp. 1,5ml №3<br/>Solution For Intramuscular Introduction 15 Mg №Mp. 1,5ml №10<br/>Supp. Rectal 15mg №6Supp. Rectal 7,5mg №6Tablets 15mg №10<br/>Tablets 7,5mg №20"
                        ),
                        array(
                            "name" => "Artrum",
                            "desc" => "Gel For External Use 2,5% 30 G, Ointment<br/>Gel For External Use 5% 30 G, Ointment"
                        ),
                        array(
                            "name" => "Diclofenac",
                            "desc" => "Solution For Intromuscular Injection 75 Mg/Ml 3 Ml №10<br/>Tablets, Coated With Enteric Shell 25 Mg №30<br/>Ointment For External Application Of 1% 30 G<br/>Rectal Suppositories 50 Mg №10Amp. 25mg/Ml 3ml. №5"
                        ),
                        array(
                            "name" => "Flamadex",
                            "desc" => "Solution For Introduction 25mg/Ml, 2ml №5<br/>Tablets 25mg №10"
                        ),
                        array(
                            "name" => "Flamax",
                            "desc" => "Amp. 50mg/Ml 2ml №10<br/>Amp. 50mg/Ml 2ml №5<br/>Capsule 50mg №25"
                        ),
                        array(
                            "name" => "Flamax Forte",
                            "desc" => "Tablets100 Mg. №20"
                        ),
                        array(
                            "name" => "Ibuprofen",
                            "desc" => "Film-Coated Tablets, 0.2 G №20<br/>Film-Coated Tablets 0,2g №50<br/>Supp. Rectal Rese (For Kids) 60mg №10"
                        ),
                        array(
                            "name" => "Indomethacin",
                            "desc" => "Rectal Suppositories 100 Mg №10<br/>Indomethacin-Biosynthesis<br/>Coated Tablets, 0,025g №30<br/>Ointment For External Use 10% 30g"
                        ),
                        array(
                            "name" => "Analgin",
                            "desc" => "Solution For For Introvenous And Intromuscular Injection 500 Mg/Ml 2 Ml №10"
                        ),
                        array(
                            "name" => "Belladonna Extract",
                            "desc" => "Rectal Suppositories 0.015 G №10"
                        ),
                        array(
                            "name" => "Citramon P",
                            "desc" => "(Aspirin 220 Mg + Acetaminophen 200 Mg +Caffeine 27mg)"
                        ),
                        array(
                            "name" => "Dolomine",
                            "desc" => "Amp. 30mg/Ml 1ml №5"
                        ),
                        array(
                            "name" => "Drotaverinum",
                            "desc" => "Tablets 40 Mg №20"
                        ),
                    ),
                    "AGAINST INFLUENZA" => array(
                        array(
                            "name" => "Anvimax",
                            "desc" => "The Composition Of 1 Packet Includes 360 Mg Of Paracetamol, 300 Mg Of Ascorbic Acid, 100 Mg Of Calcium Gluconate Monohydrate, 50 Mg Of Rimantadine Hydrochloride, 20 Mg Of Rutoside Trihydrate, 3 Mg Of Loratadine."
                        ),
                        array(
                            "name" => "Anvifen",
                            "desc" => "Capsules 50mg №20<br/>Capsules 250mg №20<br/>Capsules 250mg №20"
                        )
                    ),
                    "OTHERS" => array(
                        array(
                            "name" => "Furosemide",
                            "desc" => "Solution For Injection 1% 2ml №10, Ampules<br/>Tablets 40 Mg №50"
                        ),
                        array(
                            "name" => "Eufillin",
                            "desc" => "Tablets 150 Mg №30<br/>Solution For Intravenous Injections 24 Mg/Ml 10 Ml №10, Ampules"
                        ),
                        array(
                            "name" => "Disol (Bromhexin)",
                            "desc" => "Solution For Infusion 200 Ml<br/>Solution For Infusion 400 Ml"
                        ),
                        array(
                            "name" => "Dimedrol",
                            "desc" => "Solution For Introvenous And Intromuscular Injection 10 Mg/Ml 1 Ml №10"
                        ),
                        array(
                            "name" => "Bromhexin",
                            "desc" => "Tablets 0,008g №50"
                        ),
                        array(
                            "name" => "Rabeprazol",
                            "desc" => "Capsules 10mg №14<br/>Capsules 20mg №14<br/>Capsules 10mg №28<br/>Capsules 20mg №28"
                        ),
                        array(
                            "name" => "Cholenzim",
                            "desc" => "Film-Coated Tablets, №50"
                        ),
                        array(
                            "name" => "Oxytocin",
                            "desc" => "Oxytocin-MEZ Solution For Intravenous And Intramuscular Administration, 5 №№/Ml, 1ml Ampules, Pack Of 10"
                        ),
                        array(
                            "name" => "Naphazoline",
                            "desc" => "Naphthyzine Nasal Drops 0.1% 10 Ml Bottle Droppers, Pack Of 1"
                        ),
                        array(
                            "name" => "Sildenafil",
                            "desc" => "Film Coated Tablets 50 Mg №4<br/>Film Coated Tablets 50 Mg №10<br/>Film Coated Tablets 50 Mg №20<br/>Film Coated Tablets 100 Mg №4<br/>Film Coated Tablets 100 Mg №10<br/>Film Coated Tablets 100 Mg №20"
                        ),
                        array(
                            "name" => "Ursodez",
                            "desc" => "Capsules 250 Mg №50<br/>Fentanyl Transdermal Therapeutic System (TTS) 50 Mcg/H, Pack Of 5"
                        ),
                        array(
                            "name" => "Tadalafil",
                            "desc" => "Film Coated Tablets 5 Mg №30<br/>Film Coated Tablets 20 Mg №4<br/>Film Coated Tablets 20 Mg №10<br/>Film Coated Tablets 20 Mg №20"
                        ),
                        array(
                            "name" => "Chorionic Gonadotropin",
                            "desc" => "Lyophilisate For Preparing The Solution For Intramuscular Administration 500 №№/Ml, 5ml Glass Vials, Pack Of 5 With 5 Ampules Of 1ml Solvent<br/>Lyophilisate For Preparing The Solution For Intramuscular Administration 1000 №№/Ml, 5ml Glass Vials, Pack Of 5 With 5 Ampules Of 1ml Solvent<br/>Lyophilisate For Preparing The Solution For Intramuscular Administration 1500 №№/Ml, 5ml Glass Vials, Pack Of 5 With 5 Ampules Of 1ml Solvent<br/>Lyophilisate For Preparing The Solution For Intramuscular Administration 50"
                        ),
                        array(
                            "name" => "Metoclopramide",
                            "desc" => "Metoclopramide 10 Mg Tablets, Pack Of 50<br/>Metoclopramide Solution For Intravenous Or Intramuscular Injection 5 Mg/Ml, 2ml Ampules, Pack Of 10"
                        ),
                        array(
                            "name" => "Bifisteam",
                            "desc" => "Powder №10"
                        ),
                        array(
                            "name" => "Compligam",
                            "desc" => "№Mp.2ml"
                        ),
                        array(
                            "name" => "Ketoaminol",
                            "desc" => "Tablets Coated №100"
                        ),
                        array(
                            "name" => "Hepaguard",
                            "desc" => "Active № 30/4 Mini-Box (BIOS)<br/>Active Capsules № 30"
                        ),
                        array(
                            "name" => "Idrinol",
                            "desc" => "Solution 100mg/1ml Amp. 5ml №5<br/>Capsule 250mg №40"
                        ),
                        array(
                            "name" => "Metformin",
                            "desc" => "Tab. 850mg №60<br/>Tab. 500mg №60<br/>Tab. 1000mg №60"
                        )
                    )

                );

            
            ?>

            <div class="row">
                <div class="col-12">
                    <ul class="product-list-item">

                        <?php foreach ( $list[ $product ] as $key => $value ) { ?>

                            <li class="item">
                                <h4><?php echo $value['name']; ?></h4>
                                <p><?php echo $value['desc'] ?></p>
                            </li>

                        <?php } ?>

                    </ul>
                </div>
            </div>

        </div>
    </section>

    <?php include_once('./../inc/footer.inc') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./../scripts/owl.carousel.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

<script src="./../scripts/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="./../scripts/scripts.js"></script>

</body>
</html>