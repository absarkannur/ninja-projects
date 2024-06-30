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
                    <h1>Food Supplement</h1>
                    <ul>
                        <li><a href="index.php">Home</a> &gt;</li>
                        <li><a href="./../products.php">Products</a> &gt;</li>
                        <li>Food Supplement</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ak-container ak-inner-product-list">
        <div class="container">

            <?php

                $list = array(
                    "FOOT SUPPLEMENTS" => array(
                        array(
                            "name" => "Amplifir Caps. №90",
                            "desc" => "Natural Laxative And Helps To Restore The Microflora."
                        ),
                        array(
                            "name" => "Artranov №90 Caps.",
                            "desc" => "Food Supplement, An Additional Source Of Glucosamine, Chondroitin, Collagen, Calcium, Vitamins And Minerals – A Real Help Your Joints And Prevention Of Osteoporosis."
                        ),
                        array(
                            "name" => "Artrosilax 60 Caps.",
                            "desc" => "Prevention Of Diseases Of The Musculoskeletal System, Auxiliary Remedy In Complex Therapy Of Locomotor Apparatus"
                        ),
                        array(
                            "name" => "Atrtopil 90 Caps.",
                            "desc" => "Contains Collagen, Vitamin C, Zinc And Selenium Which Contribute To The Regeneration Of Cartilage Tissue In The Joints And Ligaments. Recovery Of Musculoskeletal."
                        ),
                        array(
                            "name" => "Badan-Badan № 90 Caps.",
                            "desc" => "A Source Of Arbutin. Food Supplement For Prevention Of Diseases Of Urogenital And Urinary Systems."
                        ),
                        array(
                            "name" => "Berries Of Blackberries – Powder In Capsules №60",
                            "desc" => "Plant Insulin. Improves Your Vision."
                        ),
                        array(
                            "name" => "Berries Of Blueberries – Powder In Capsules №60",
                            "desc" => "Improves Memory, Clear Thinking And Concentration (Antisclerotic Effect), And Glucose-Lowering Remedy."
                        ),
                        array(
                            "name" => "Berries Of Cranberries – Powder In Capsules №60",
                            "desc" => "A Natural Antibiotic. Diuretic, Anti-Inflammatory Remedy."
                        ),
                        array(
                            "name" => "Burdock Root №60 Caps.",
                            "desc" => "Blood-Purifying Remedy. A Source Of Inulin. Improves The Function Of The Pancreas In Making Insulin."
                        ),
                        array(
                            "name" => "Calamus Rhizome № 60 Caps.",
                            "desc" => "Detoxifying, Antiviral, Antibacterial Remedy. Has Aphrodisiakum Effect (Increases Potency Of Men)"
                        ),
                        array(
                            "name" => "Cardicord 90 Caps.",
                            "desc" => "Prevention Of Cardiovascular Diseases."
                        ),
                        array(
                            "name" => "Cerebrilid Caps. № 60",
                            "desc" => "For Improving Cerebral Circulation."
                        ),
                        array(
                            "name" => "Chromium-Spirulina 60 Caps.",
                            "desc" => "Natural Plant Extracts Of The Spirulina Microalgae And Chromium In The Cell Structure. It Is A Unique In Digestibility, Safety And Availability Biological Chromium Compound And Of A Living Cell. Used To Control Appetite, Keeping Strong Muscles, Flexible Strong Body, While Other Methods Of Losing Weight Lead To A Weakening Of The Muscles."
                        ),
                        array(
                            "name" => "Cleanlife– Caps. № 60",
                            "desc" => "Antiparasitic Complex."
                        ),
                        array(
                            "name" => "Cuprum-Spirulina 60 Caps.",
                            "desc" => "Food Supplement That Has No Analogues In The World. Organic Available Form Of Copper Is Used In The Treatment Of Rheumatoid Arthritis, Candidiasis, Anemia, Bone Health, Joints, Immune System, Memory, To Prevent Early Gray Hair, Varicose Veins, Delayed Pubertal Development In Girls, Infertility, When Taking Contraceptives And Decrease Women Libido"
                        ),
                        array(
                            "name" => "Dandelion Root № 60 Caps. – Pomogun",
                            "desc" => "Life Elixir. A Source Of Inulin, Bitters. Supports The Biocenosis Of The Intestine, The Reproduction Of Beneficial Microflora. Cleanses The Liver, The Gallbladder. Laxative."
                        ),
                        array(
                            "name" => "Drops Based On Herbs With Vitamin C ANISE 60 G",
                            "desc" => "Anise Relieves Pain, Inflammation And High Temperature, Has A Bottomless And Antiseptic Effect.Ascorbic Acid Is A Powerful Antioxidant. Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria."
                        ),
                        array(
                            "name" => "Drops Based On Herbs With Vitamin C EUCALYPTUS WITH MENTHOL 60g",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Eucalyptus Increases The Body's Defenses And Resistance To Disease. Menthol Has Irritating, Antiseptic, Analgesic, Soothing Effect."
                        ),
                        array(
                            "name" => "Drops Based On Herbs With Vitamin C GINSENG 60 G",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Ginseng Improves Memory And Hematopoiesis, Normalizes Heart Function And Metabolic Processes."
                        ),
                        array(
                            "name" => "Drops Based On Herbs With Vitamin C LEMON MINT 60 G",
                            "desc" => "Lemon Balm Has A Calming Effect, Helps Relieve Pain In Many Diseases. Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria."
                        ),
                        array(
                            "name" => "Drops Based On Herbs With Vitamin C LICORICE 60 G",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Licorice Is Able To Improve The Condition Of Diseases Of The Heart And Blood Vessels, Low Blood Pressure, Thyroid Disease."
                        ),
                        array(
                            "name" => "Drops Based On Herbs With Vitamin C ROSEHIPS 60 G",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Rosehip Fruits Increase The Overall Stability Of The Body, The Production Of Hormones, Stimulate Regeneration Processes, Have Anti-Inflammatory Properties."
                        ),
                        array(
                            "name" => "Drops Based On Herbs With Vitamin C SAGE WITH HONEY 60 G",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Sage Has Astringent, Hemostatic, Anti-Inflammatory And Disinfectant Properties. Honey Has Bactericidal And Anti-Inflammatory Effects."
                        ),
                        array(
                            "name" => "Drops Based On Herbs With Vitamin C SEA BUCKTHORN WITH HONEY 60 G",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Honey Has Bactericidal And Anti-Inflammatory Effects. Sea Buckthorn Reduces Cholesterol, Berries Gently And Effectively Cleanse The Intestine Of Harmful Substances, Restore Microflora."
                        ),
                        array(
                            "name" => "Drops Based On Herbs With Vitamin WITH HONEY 60 G",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria. Honey Has Bactericidal And Anti-Inflammatory Effects."
                        ),
                        array(
                            "name" => "Field Horsetail № 60 Caps.",
                            "desc" => "Plant Biogenic Silicium Required For Strengthening The Connective Tissue, Mucous Membranes, Blood Vessel Walls, Bone Tissue. Diuretic, Hemostatic And Anti-Inflammatory Remedy."
                        ),
                        array(
                            "name" => "Flavopolisan 120 Caps.",
                            "desc" => "Prevention Of Herpes (Cold Sore), Is An Immune Stimulant"
                        ),
                        array(
                            "name" => "Fruits Of Cherry – Powder In Capsules № 60",
                            "desc" => "Nourishes Heart Muscle, Removes Cholesterol From The Body And Protects The Arteries From Atherosclerosis, Slows Blood Clotting."
                        ),
                        array(
                            "name" => "Ginzelakt 30 Caps",
                            "desc" => "Recovery Of The Intestinal Wall And Improve Digestion, Is A Mild Laxative"
                        ),
                        array(
                            "name" => "Ishemin 60 Caps.",
                            "desc" => "Vitamin C With Prolonged Effect With Vitamins, Minerals, Bioflavonoids."
                        ),
                        array(
                            "name" => "Izoflavons – Caps. №30",
                            "desc" => "Phytoestrogens To Maintain Hormonal Balance Of Women After 40 Years."
                        ),
                        array(
                            "name" => "Kariochi 60 Caps.",
                            "desc" => "Kariochi 60 Caps."
                        ),
                        array(
                            "name" => "Karnovita Caps. №30",
                            "desc" => "A Strong Antioxidant, A Remedy For Aging"
                        ),
                        array(
                            "name" => "Kovcheg 60 Caps.",
                            "desc" => "Is A Unique Complex – A Powerful Antioxidant That Scavenges Free Radicals, Microbial Infections And Prolonging The Life Of Other Antioxidants."
                        ),
                        array(
                            "name" => "Lactevia Caps. № 15",
                            "desc" => "Complex Of Symbiotic Micro-Organisms Of Beneficial Microflora Of The Gastrointestinal Tract."
                        ),
                        array(
                            "name" => "L-Carnitine Premium Caps. № 90",
                            "desc" => "Energy, Fat Burner For Weight Stabilization, Supports The Cardiovascular System"
                        ),
                        array(
                            "name" => "Likefood Caps. № 90",
                            "desc" => "Replacement Of Digestive Enzymes, Improve Digestion And Condition The Mucosa Of The Gastrointestinal Tract."
                        ),
                        array(
                            "name" => "Lollipop",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria."
                        ),
                        array(
                            "name" => "Lollipop “Candy”, 17G With Vitamin C And Pear Flavour",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria."
                        ),
                        array(
                            "name" => "Lollipop “Candy”, 17G With Vitamin C And Raspberries And Blackberries Flavour",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria."
                        ),
                        array(
                            "name" => "Lollipop “Candy”, 17G With Vitamin C And Strawberry Flavour",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria."
                        ),
                        array(
                            "name" => "Lollipop “Candy”, 17G With Vitamin C And Cherry Flavour",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria."
                        ),
                        array(
                            "name" => "Lollipop “Candy”, 17G With Vitamin C And Lemon And Mint Flavour",
                            "desc" => "Vitamin C Strengthens The Human Immune System And Protects It From Viruses And Bacteria."
                        ),
                        array(
                            "name" => "Marganese-Spirulina 60 Caps.",
                            "desc" => "Plant Complex Of Manganese And Spirulina. It Is Recommended To Improve Process Of Thinking, Attention, Chronic Fatigue, Weakness, Irritability, When Predisposition To Diabetes And To Tumors, Improves The State Of Musculoskeletal System In Old Age, When Overweight, Delay Of Psychological And Speech Development Of Children, Tendency To Asthma, Allergies."
                        ),
                        array(
                            "name" => "MaxiOl - Caps. №90",
                            "desc" => "Prevention Of Diseases Of The Musculoskeletal Apparatus."
                        ),
                        array(
                            "name" => "Moving 250g.",
                            "desc" => "Prevention Of Diseases Of The Musculoskeletal System, A Source Of Hydroxyproline, Hydrolyzed Collagen, Additional Source Of Vitamin C, Calcium, Zinc And Manganese."
                        ),
                        array(
                            "name" => "Muira Puama Caps. № 30",
                            "desc" => "Prevention Of Atherosclerosis."
                        ),
                        array(
                            "name" => "Reishi Caps.",
                            "desc" => "Immunostimulating And Immunomodulating Remedy, Prevention Of Tumors."
                        ),
                        array(
                            "name" => "Salivitteline Caps. 60",
                            "desc" => "Herbal Aspirin."
                        ),
                        array(
                            "name" => "Selenium-Spirulina 60 Caps",
                            "desc" => "Natural Herbal Complex Derived Similarly Food Supplement `Chromium-Spirulina`. Live Organic Form Of Selenium Is A Powerful Antioxidant. It Is Used To Prevent Cardiovascular And Oncological Diseases, Osteochondrosis, Normalizes The Liver, Pancreas And Thyroid Glands, Removes Heavy Metals, Toxins, Radionuclides And Slows The Aging Process."
                        ),
                        array(
                            "name" => "Shambala 60 Caps.",
                            "desc" => "Plant Antimicotic (Candidiasis, Urogenital Infections, Vaginitis, Vulva, Yeast Infection)"
                        ),
                        array(
                            "name" => "Shishki Hmelya № 60 Caps.",
                            "desc" => "Hypnotic; An Anti-Inflammatory, Capillary Strengthening, Sedative And Analgesic Remedy."
                        ),
                        array(
                            "name" => "Silizimag 90 Caps.",
                            "desc" => "A Source Of Bioavailable Silicium."
                        ),
                        array(
                            "name" => "Stem - Caps. № 90",
                            "desc" => "Way To Lose Weight And Increase Energy."
                        ),
                        array(
                            "name" => "Sterostatin 60 Caps.",
                            "desc" => "Prevention Of Atherosclerosis."
                        ),
                        array(
                            "name" => "Taurine Forte Caps. №30",
                            "desc" => "Antioxidant Protection Of The Heart, Eyes, Bronchial Tubes, Reduces Blood Pressure, Blood Sugar, Total Cholesterol, Prevention Of Heart Rhythm Disorders, Restores The Power Of Nerve Cells"
                        ),
                        array(
                            "name" => "TauriNov №120 Caps.",
                            "desc" => "Food Supplement, An Additional Source Of Taurine, Vitamins B1, B6, B12, Taxifolin, Manganese, Manganese, Zinc And Magnesium To Normalize The Function Of The Cardiovascular System, Capillary Circulation, Including The Brain."
                        ),
                        array(
                            "name" => "Terapikar 60 Caps.",
                            "desc" => "Complex For The Prevention Of Cardiovascular Diseases."
                        ),
                        array(
                            "name" => "Very Low Calorie Diet program",
                            "desc" => "A balanced nutrition program for a week. About 500 kcal per day."
                        ),
                        array(
                            "name" => "Vitagor 60 Caps.",
                            "desc" => "Supercleaner From Parasites Of All Kinds."
                        ),
                        array(
                            "name" => "Vita-Magnesium 60 Caps.",
                            "desc" => "Organic And Available Form Of Magnesium That Affects Almost All Aspects Of Human Health. The Lack Of Magnesium Affects Such Common Conditions As Stress, Chronic Fatigue Syndrome, Hypertension, All Cardiovascular Disorders."
                        ),
                        array(
                            "name" => "Vita-Potassium 60 Caps.",
                            "desc" => "The Organic Form Of Potassium – Major Intracellular Electrolyte And Activator Of Functions Of Some Enzymes, Regulator Of Blood Pressure. Recommended For The Prevention Of Cardiovascular Disease And Cancer, Diabetes, And Neurosis."
                        ),
                        array(
                            "name" => "Yantifan Caps. № 60",
                            "desc" => "Natural Antidepressant (Against Depression)."
                        ),
                        array(
                            "name" => "Zinc-Spirulina. 60 Caps.",
                            "desc" => "The Organic Form Of Zinc, With Unique Digestibility And Availability To The Human Body. Recommended For Frequent Acute Respiratory Infections, Herpes, Allergies, Hair Problems (Hair Loss, Poor Growth), Skin (Acne, Psoriasis), Nails, Wound Healing, Impaired Function Of The Reproductive System Of Men (Prevention Of Prostatitis), Tendency To Alcohol Abuse, Elevated Blood Sugar, Memory Impairment, Hyperactivity."
                        ),
                        array(
                            "name" => "Viburnum Ordinary – Powder In Capsules № 60",
                            "desc" => "Strengthens The Heart Muscle And Blood Vessels, Has A Diuretic, Cholagogue And Diaphoretic Action."
                        ),
                        array(
                            "name" => "OVA FIT",
                            "desc" => ""
                        ),
                    )
                );
            
            ?>

            <div class="row">
                <div class="col-12">
                    <ul class="product-list-item">

                        <?php foreach ( $list['FOOT SUPPLEMENTS'] as $key => $value ) { ?>

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