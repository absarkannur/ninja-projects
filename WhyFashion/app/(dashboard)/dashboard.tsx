import { View, Text, StyleSheet, SafeAreaView, Image, Modal, TouchableWithoutFeedback, TouchableOpacity, Dimensions, FlatList, Linking, Alert } from 'react-native'
import React, { useState, useRef } from 'react'

import { StatusBar } from 'expo-status-bar';
import { LinearGradient } from 'expo-linear-gradient';
import Button from '@/components/Button';
import Spacer from '@/components/Spacer';

import Swiper from 'react-native-deck-swiper';

import MaterialIcons from '@expo/vector-icons/MaterialIcons';
import Ionicons from '@expo/vector-icons/Ionicons';
import AntDesign from '@expo/vector-icons/AntDesign';
import MaterialCommunityIcons from '@expo/vector-icons/MaterialCommunityIcons';

// Test

import { GestureDetector, Gesture, GestureHandlerRootView, PanGestureHandler } from 'react-native-gesture-handler';
import Animated, {
  useSharedValue,
  useAnimatedStyle,
  withTiming,
  interpolate,
  Extrapolation,
  withDecay,
  withClamp,
  withSpring
} from 'react-native-reanimated';
import Card from '@/components/Card';
import { opacity } from 'react-native-reanimated/lib/typescript/Colors';
import SearchBar from '@/components/SearchBar';
import { router } from 'expo-router';


// Data preach
// 'https://codesandbox.io/p/sandbox/react-tinder-card-demo-8tzm6?file=%2Fsrc%2Fexamples%2FSimple.js%3A46%2C10-46%2C20'

type dataTypes = { id?: number, name: string, image?: string, brand?: string, description?: string, price?: string, url?: string, bg?: string };

const db: dataTypes[] = [
    // Shoes & Sandal
    {
        'id': 1,
        'name': 'Hermès Bouncing sneaker',
        'image': 'https://assets.hermes.com/is/image/hermesproduct/bouncing-sneaker--242810ZH02-front-wm-1-0-0-800-800_g.jpg',
        'brand': 'Hermès',
        'price': 'SAR 5,105',
        'description': 'Sneaker in calfskin and suede goatskin. Light sole with contrasting design for a versatile and modern look.',
        'url': 'https://www.hermes.com/ri/en/product/bouncing-sneaker-H242810ZH02390/',
        'bg': 'rgb(214, 210, 203)',
    },
    {
        'id': 2,
        'name': "Women's platform sandal with Horsebit",
        'image': 'https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1734456739/834420_AAEXM_3706_002_090_0000_Light-Womens-platform-sandal-with-Horsebit.jpg',
        'brand': 'GUCCI',
        'price': 'SAR 5,500',
        'description': 'Elevated yet effortless, this women’s platform sandal pairs luxurious suede with the signature Horsebit detail. Set on a sculpted wood platform, the design merges heritage elegance with a bold, contemporary silhouette.',
        'url': 'https://www.gucci.com/sa/en_gb/pr/women/shoes-for-women/sandals-for-women/high-heel-sandals-for-women/womens-platform-sandal-with-horsebit-p-834420AAEXM3706',
        'bg': 'rgb(234, 232, 231)',
    },
    {
        'id': 3,
        'name': 'Hermès Oz mule',
        'image': 'https://assets.hermes.com/is/image/hermesproduct/oz-mule--222075Z%2002-worn-1-0-0-800-800_g.jpg',
        'brand': 'Hermès',
        'price': 'SAR 6,350',
        'description': 'Mule in calfskin with "Tigre Royal" print and iconic palladium-plated Kelly buckle. For a chic and daring style.',
        'url': 'https://www.hermes.com/ri/en/product/oz-mule-H222075Zv02350/',
        'bg': 'rgb(225, 220, 218)',
    },
    {
        'id': 4,
        'name': 'METALLIC EFFECT SANDALS',
        'image': 'https://static.zara.net/assets/public/b576/949e/25d342a0b7da/72791eed5c93/13352510253-e1/13352510253-e1.jpg',
        'brand': 'ZARA',
        'price': 'SAR 279.00',
        'description': 'Metallic sandals. Appliqué detail on the front. High stiletto heel. Thin front straps. Buckle fastening. Round toe.',
        'url': 'http://zara.com/sa/en/metallic-effect-sandals-p13352510.html?v1=427879245&v2=2419173',
        'bg': 'rgb(236, 236, 236)',
    },
    {
        'id': 5,
        'name': 'Hermès Joy 70 sandal',
        'image': 'https://assets.hermes.com/is/image/hermesproduct/joy-70-sandal--242118Z%2002-worn-2-0-0-800-800_g.jpg',
        'brand': 'Hermès',
        'price': 'SAR 5,320',
        'description': 'High heel sandal in calfskin with thin adjustable ankle strap. A sleek design for a chic feminine look.',
        'url': 'https://www.hermes.com/ri/en/product/joy-70-sandal-H242118Zv02360/',
        'bg': 'rgb(235, 231, 220)',
    },
    {
        'id': 6,
        'name': 'MEXICO 66 DELUXE',
        'image': 'https://asics.scene7.com/is/image/asics/1182A467_020_SB_FR_AJP?$otmag_zoom$&qlt=99,1',
        'brand': 'Onitsuka Tiger',
        'price': 'AED 2,000',
        'description': 'The MEXICO 66 model combines the features of the original LIMBER-UP training shoe that debuted in 1961 and the design of Limber shoe debuted in 1966, as one of the first models that featured the iconic Onitsuka Tiger Stripes. With modern design elements, the MEXICO 66 model still retains the feel of the 1960s. The model remains an Onitsuka Tiger icon from when it first debuted. -Leather upper -OrthoLite inner sole for superior cushioning',
        'url': 'https://www.onitsukatiger.com/jp/en-gl/product/mexico-66-deluxe/1182a467_020.html?glCountry=AE&glCurrency=AED',
        'bg': 'rgb(255, 255, 255)',
    },
    {
        'id': 7,
        'name': 'Joy 70 sandal',
        'image': 'https://assets.hermes.com/is/image/hermesproduct/joy-70-sandal--251036Z%20AY-worn-2-0-0-800-800_g.jpg',
        'brand': 'Hermès',
        'price': 'AED 7,320',
        'description': 'High heel sandal in suede goatskin with "Arcane" rhinestone motif. A sleek design for a chic and feminine evening look.',
        'url': 'https://www.hermes.com/dh/en/product/joy-70-sandal-H251036ZvAY360/',
        'bg': 'rgb(234, 232, 231)',
    },
    // BAGS -------------
    {
        'id': 8,
        'name': 'Wallet On Chain',
        'image': 'https://www.chanel.com/images///f_auto,q_auto:good,dpr_1.1/w_1600/-9559847895070.jpg',
        'brand': 'CHANEL',
        'price': 'Price upon request',
        'description': 'The Spring-Summer 2025 Ready-to-Wear collection is an ode to movement and freedom. Boldly reinterpreted, the codes of the House are the signature of a free and confident allure.',
        'url': 'https://www.chanel.com/sa-en/fashion/p/AP4323B1671794305/wallet-on-chain-lambskin-diamante-gold-metal/',
        'bg': 'rgb(241, 241, 241)',
    },
    {
        'id': 9,
        'name': 'MINI CITY BAG WITH TOPSTITCHING',
        'image': 'https://static.zara.net/assets/public/ba3c/73af/eecd4b2fa79a/16031167dc02/16332510709-e1/16332510709-e1.jpg',
        'brand': 'ZARA',
        'price': 'SAR 199.00',
        'description': 'Mini city bag with contrast topstitching detail. Top handle and detachable crossbody strap. Detachable inner pouch with zip closure.',
        'url': 'https://www.zara.com/sa/en/mini-city-bag-with-topstitching-p16332510.html?v1=426592649',
        'bg': 'rgb(230, 230, 230)',
    },
    {
        'id': 10,
        'name': 'FLORAL MINI CITY BAG',
        'image': 'https://static.zara.net/assets/public/6539/effe/0e09492f9b31/b734d6b40a37/16802510302-p/16802510302-p.jpg',
        'brand': 'ZARA',
        'price': 'AED 249.00',
        'description': 'Mini city bag with a metallic finish. Flower detail on the front. Top handles and a crossbody strap. Inside purse with zip closure. Magnetic clasp closure.',
        'url': 'https://www.zara.com/ae/en/floral-mini-city-bag-p16802510.html?v1=412072114&v2=2417728',
        'bg': 'rgb(238, 238, 238)',
    },
    {
        'id': 11,
        'name': 'Hermès Garden Party Voyage 49 bag',
        'image': 'https://assets.hermes.com/is/image/hermesproduct/garden-party-voyage-49-bag--085761CKAC-front-wm-1-0-0-800-800_g.jpg',
        'brand': 'Hermès',
        'price': 'SAR 31,475',
        'description': 'Bag in H Plume canvas with "Dancefloor au Faubourg" motif and Negonda calfskin',
        'url': 'https://www.hermes.com/ri/en/product/garden-party-voyage-49-bag-H085761CKAC/',
        'bg': 'rgb(228, 224, 217)',
    },
    {
        'id': 12,
        'name': 'Gucci Diana mini tote bag',
        'image': 'https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1695059163/702732_AAA5Y_1060_001_063_0000_Light-Gucci-Diana-mini-tote-bag.jpg',
        'brand': 'GUCCI',
        'price': 'SAR 13,900',
        'description': 'Combining recognisable elements of the House, the Gucci Diana is defined by its bamboo handles and Double G hardware. Crafted from blue leather, the mini-sized tote bag is further accentuated by two matching bands, a playful reference to the bands used to keep handles in shape.',
        'url': 'https://www.gucci.com/sa/en_gb/pr/women/handbags/shoulder-bags-for-women/gucci-diana-mini-tote-bag-p-702732AAA5Y1060',
        'bg': 'rgb(234, 234, 234)',
    },
    {
        'id': 13,
        'name': 'SPLIT SUEDE MINI HANDBAG',
        'image': 'https://static.zara.net/assets/public/12b6/f3ba/e3f741d7bc1b/2a951a172ee8/16595510718-e2/16595510718-e2.jpg',
        'brand': 'ZARA',
        'price': 'SAR 849.00',
        'description': 'Mini split suede handbag. Inside zip pocket. Top handle. Magnetic flap closure.',
        'url': 'https://www.zara.com/sa/en/split-suede-mini-handbag-p16595510.html?v1=423477747',
        'bg': 'rgb(240, 240, 240)',
    },
    {
        'id': 14,
        'name': 'Gucci Softbit maxi shoulder Bag',
        'image': 'https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1741110393/837466_AAEAO_3332_001_093_0000_Light-Gucci-Softbit-maxi-shoulder-bag.jpg',
        'brand': 'GUCCI',
        'price': 'SAR 13,350',
        'description': 'The new Gucci Softbit shoulder bag reimagines the House’s signature hardware as an oversized half Horsebit. It is both aesthetic and functional as the magnetic closure of the relaxed silhouette, crafted from supple, grainy leather with a rich texture.',
        'url': 'https://www.gucci.com/sa/en_gb/pr/women/handbags/shoulder-bags-for-women/half-moon-bags-for-women/gucci-softbit-maxi-shoulder-bag-p-837466AAEAO3332',
        'bg': 'rgb(230, 230, 230)',
    },
    // Dresses
    {
        'id': 15,
        'name': 'ZW COLLECTION LINEN BLEND DRESS',
        'image': 'https://static.zara.net/assets/public/4139/f450/b1e44d559884/a0212c130dd3/03013048430-p/03013048430-p.jpg',
        'brand': 'ZARA',
        'price': 'SAR 529.00',
        'description': "Long dress made of linen-blend yarn. Round neck and thin straps. Matching inner lining. Flared hem.",
        'url': 'https://www.zara.com/sa/en/woman-dresses-l1066.html',
        'bg': 'rgb(220, 220, 220)',
    },
    {
        'id': 16,
        'name': 'GG canvas jumpsuit with Horsebit',
        'image': 'https://media.gucci.com/style/DarkGray_Center_0_0_2400x2400_40/1738145703/781457_Z8BRZ_3036_005_100_1000_Light-GG-canvas-jumpsuit-with-Horsebit.jpg',
        'brand': 'GUCCI',
        'price': '$ 4,200',
        'description': 'In the Spring Summer 2025 collection, the GG motif is reinterpreted in vibrant shades. This straight fit jumpsuit is crafted in GG canvas and defined by a Horsebit detail across the pockets.',
        'url': 'https://www.gucci.com/us/en/pr/women/ready-to-wear-for-women/dresses-and-jumpsuits-for-women/jumpsuits-for-women/gg-canvas-jumpsuit-with-horsebit-p-781457Z8BRZ3036',
        'bg': 'rgb(255, 255, 255)',
    },
    {
        'id': 17,
        'name': 'Hermès Caftan dress',
        'image': 'https://assets.hermes.com/is/image/hermesproduct/caftan-dress--5E0539DADE-worn-1-0-0-800-800_g.jpg',
        'brand': 'Hermès',
        'price': 'SAR 20,885',
        'description': 'Caftan dress in macro silk twill (100% silk)',
        'url': 'https://www.hermes.com/ri/en/product/caftan-dress-H5E0539DADE36/',
        'bg': 'rgb(226, 216, 206)',
    },
    {
        'id': 18,
        'name': 'CHAIN PRINT MIDI DRESS',
        'image': 'https://static.zara.net/assets/public/5c38/61e5/2c4e435bb7a4/22c8cd009b59/02333113330-p/02333113330-p.jpg',
        'brand': 'ZARA',
        'price': 'SAR 299.00',
        'description': 'Dress with a wide round neck and wide sleeves that fall below the elbow. Featuring a front knot detail, a front slit at the hem and a concealed zip and hidden button fastening at the back.',
        'url': 'https://www.zara.com/sa/en/chain-print-midi-dress-p02333113.html?v1=425173630&v2=2420896',
        'bg': 'rgb(255, 255, 255)',
    },
    {
        'id': 19,
        'name': 'GG crêpe silk wool double-breasted coat',
        'image': 'https://media.gucci.com/style/DarkGray_Center_0_0_2400x2400_40/1736273863/828105_Z8BZX_2071_005_100_0000_Light-GG-crpe-silk-wool-double-breasted-coat.jpg',
        'brand': 'GUCCI',
        'price': 'SAR 32,800',
        'description': 'In the Spring Summer 2025 collection, grand coats of the finest construction with a couture attitude are designed for the everyday. This long oversize coat has a petite fit with back slit, and is doubled with GG crêpe silk wool.',
        'url': 'https://www.gucci.com/sa/en_gb/pr/women/ready-to-wear-for-women/coats-jackets-for-women/coats-for-women/gg-crepe-silk-wool-double-breasted-coat-p-828105Z8BZX2071',
        'bg': 'rgb(255, 255, 255)',
    },
    // Accessories
    {
        'id': 20,
        'name': 'DIOR ADDICT LIP GLOW',
        'image': 'https://shop-beauty.dior.sa/cdn/shop/files/Y0457000_E000000007_E01_GHC_1512x.jpg',
        'brand': 'DIOR',
        'price': 'SAR 200.00',
        'description': 'Dior Addict Lip Glow is the Dior lip balm that is the perfect combination of lip care and makeup. Thanks to its unique¹ technology, the formula reacts with the pH level of lips to reveal a "custom" color that instantly enhances their glow.',
        'url': 'https://shop-beauty.dior.sa/products/dior-addict-lip-glow',
        'bg': 'rgb(243, 243, 243)',
    },
    {
        'id': 21,
        'name': 'Hermès Oran Nano charm',
        'image': 'https://assets.hermes.com/is/image/hermesproduct/oran-nano-charm--080174CAAH-front-1-300-0-800-800_g.jpg',
        'brand': 'Hermès',
        'price': 'SAR 3,985',
        'description': 'Charm in polished Niloticus lizard, Butler calfskin and Hunter cowhide with "Hermès Paris" hot stamp',
        'url': 'https://www.hermes.com/ri/en/product/oran-nano-charm-H080174CAAH/',
        'bg': 'rgb(231, 227, 216)',
    },
    {
        'id': 22,
        'name': 'Hermès Tarmac passport holder',
        'image': 'https://assets.hermes.com/is/image/hermesproduct/tarmac-passport-holder--057946CK67-front-wm-1-0-0-800-800_g.jpg',
        'brand': 'Hermès',
        'price': 'SAR 1,425',
        'description': 'Passport holder in Epsom calfskin',
        'url': 'https://www.hermes.com/ri/en/product/tarmac-passport-holder-H057946CK67/',
        'bg': 'rgb(231, 227, 216)',
    },
    {
        'id': 23,
        'name': 'Hermès Athena simple stud ring',
        'image': 'https://assets.hermes.com/is/image/hermesproduct/athena-simple-stud-ring--500347FD55-front-wm-2-0-0-800-800_g.jpg',
        'brand': 'Hermès',
        'price': 'SAR 1,770',
        'description': 'Simple stud ring in Madame calfskin and metal. The Athena line celebrates our emblematic Medor signature, delicately reinterpreting the stud on a range of metal and leather jewelry. These new refined rings can be worn alone but are also perfect for stacking.',
        'url': 'https://www.hermes.com/ri/en/product/athena-simple-stud-ring-H500347FD5553/',
        'bg': 'rgb(231, 227, 216)',
    }
];

function clamp(val:number, min:number, max:number) {
    return Math.min(Math.max(val, min), max);
}

const NotifyItem = ({ name, price, image }: dataTypes) => (
    <View style={{ 
            backgroundColor: '#FFF', 
            marginBottom: 20,
            padding: 10,
            shadowColor: 'rgb(175, 175, 175)',
            shadowOffset: { width: 0, height: 2 },
            shadowOpacity: 0.9,
            shadowRadius: 4,
            elevation: 5,
            borderRadius: 8,
            flexWrap: 'wrap',
            flexDirection: 'row'
        }}>
        <View style={{ width: '30%' }}>
            <Image source={{ uri: image }} style={{ width: 80, height: 100 }} resizeMode='contain' />
        </View>
        <View style={{ width: '70%' }}>
            <Text style={{color: 'rgb(250, 109, 1)', fontFamily: 'Montserrat-Bold', fontSize: 10, marginBottom: 4 }}>DISCOUNT</Text>
            <Text style={{ fontFamily: 'Montserrat-SemiBold', fontSize: 18 }}>{name}</Text>
            
            <View style={{ flexWrap: 'wrap', flexDirection: 'row', marginTop: 5 }}>
                <View style={{ width: '50%', alignItems: 'flex-start', justifyContent: 'center' }}>
                    <Text style={{ fontFamily: 'Montserrat-SemiBold', fontSize: 18 }}>{ price }</Text>
                </View>
                <View style={{ width: '50%', alignItems: 'flex-end' }}>
                    <TouchableOpacity style={{ backgroundColor: '#000', height: 30, width: 50, alignItems: 'center', justifyContent: 'center', borderRadius: 5  }}>
                        <Text style={{ color: '#fff', textAlign: 'center' }}>Visit</Text>
                    </TouchableOpacity>
                </View>
            </View>

        </View>
    </View>
);

export default function Dashboard() {

    // Swipe Ref
    const swiperRef = useRef<Swiper<any>>(null);

    const [ modalVisible, setModalVisible ] = useState(false);
    const [ notifyModalVisible, setNotifyModalVisible] = useState(false);
    const [ swipeData, setSwipeData ] = useState<any>([]);

    const [ swipeIndex, setSwipeIndex ] = useState<number>(0);

    const [ likeOpacity, setLikeOpacity ] = useState(1);
    const [ nopeOpacity, setNopeOpacity ] = useState(1);

    const likeButtonWith = useSharedValue(50);
    const likeButtonHeight = useSharedValue(50);


    // const [profile, setProfile] = useState(db);
    // const lastProfile = profile[profile.length - 1];
    // const remainingProfiles = profile.slice(0, -1);


    // const onSwipe = ( direction: any, id: number ) => {
    //     console.log( 'You swiped: ' + direction + ' - ' + id );
    // }
    // const handlePressCard = () => {
    //     setModalVisible(true);
    // }

    // const { width, height } = Dimensions.get('screen');

    // const translationX = useSharedValue(0);
    // const translationY = useSharedValue(0);
    // const prevTranslationX = useSharedValue(0);
    // const prevTranslationY = useSharedValue(0);
    // const velocityX = useSharedValue(0);

    // const rotateZ = useSharedValue(0);
    // const prevRotateZ = useSharedValue(0);



    // const [ likeOpacityButton, setLikeOpacityButton ] = useState(1);
    // const [ nopeOpacityButton, setNopeOpacityButton ] = useState(1);

    // const animatedStyles = useAnimatedStyle(() => ({
    //     transform: [
    //       { translateX: translationX.value },
    //       { translateY: translationY.value },
    //       { rotate: `${rotateZ.value}deg`  }
    //     ],
    // }));

    // const dragGesture = Gesture.Pan()
    //     .minDistance(100)
    //     .onStart(() => {
    //         prevTranslationX.value = translationX.value;
    //         prevTranslationY.value = translationY.value;
    //         prevRotateZ.value = rotateZ.value;
    //     })
    //     .onUpdate((event) => {

    //         const maxTranslateX = width;
    //         const maxTranslateY = height;

    //         translationX.value = clamp(
    //             prevTranslationX.value + event.translationX,
    //             -maxTranslateX,
    //             maxTranslateX
    //         );

    //         translationY.value = clamp(
    //             prevTranslationY.value + event.translationY,
    //             -maxTranslateY,
    //             maxTranslateY
    //         );

    //         rotateZ.value =  interpolate( translationX.value,
    //             [ -width / 2, width / 2 ],
    //             [ 12, -12 ]
    //         );

    //         let temp_likeOpacity = interpolate(translationX.value,
    //             [0, width / 4],
    //             [0, 1],
    //         );

    //         setLikeOpacity( temp_likeOpacity );
    //         setLikeOpacityButton( temp_likeOpacity );

    //         let temp_nopeOpacity = interpolate(translationX.value,
    //             [-width / 4, 0],
    //             [1, 0],
    //         );

    //         // Get Left and Right

    //         setNopeOpacity( temp_nopeOpacity );
    //         setNopeOpacityButton( temp_nopeOpacity );

    //     })
    //     .onEnd((event) => {

    //         if ( translationX.value > width / 3 ) {
                
    //             console.log('Panning Right:');
                
    //         } else if ( translationX.value <  width / 3 ) {

    //             console.log('Panning Left:');

    //         }


    //         // translationX.value = withSpring( 0, { duration: 1500 });
    //         // translationY.value = withSpring( 0, { duration: 1500 });
    //         // rotateZ.value = withSpring( 0, {   
    //         //     duration: 1500
    //         // });;

    //         // setLikeOpacity( 0 );
    //         // setNopeOpacity( 0 );
    //         // setLikeOpacityButton(1);
    //         // setNopeOpacityButton(1);

    //         // setProfile(profile.slice(0, -1)); // Remove the last profile

    //     })
    //     .runOnJS(true);
        
    // Example of updating the profile state
    // -------
    // const addNewProfile = (newProfile) => {
    //     setProfile([...profile, newProfile]); // Add a new profile
    // };
  
    // const removeLastProfile = () => {
    //     setProfile(profile.slice(0, -1)); // Remove the last profile
    // };

    
    const handleSwipeLeft = () => {
        swiperRef.current?.swipeLeft();
    }
    
    const handleSwipeRight = () => {
        swiperRef.current?.swipeRight();
    }

    const handleBuy = async ( url: string ) => {

        
        const supported = await Linking.canOpenURL(url);
        
        console.log( supported )

        if (supported) {
            await Linking.openURL(url);
        } else {
            Alert.alert(`Don't know how to open this URL: ${url}`);
        }

    }

    return (
        <SafeAreaView style={ Styles.safearea }>
            <StatusBar style='dark' />
            {/* <LinearGradient
                // Background Linear Gradient
                colors={['rgb(23, 26, 33)', 'rgb(23, 37, 56)' ]}
                style={ Styles.background }
            /> */}
            <View style={ Styles.container }>
                
                <View style={ Styles.headerContainer }>
                    <TouchableOpacity 
                        onPress={ ()=> setNotifyModalVisible(!notifyModalVisible) }
                        style={{ position: 'relative', width: '20%', height: '100%', justifyContent: 'center', alignItems: 'flex-start', paddingLeft: 15 }}>
                        <MaterialIcons name="notifications-none" size={26} color="black" />
                    </TouchableOpacity>
                    <View style={{ width: '60%', height: '100%', alignItems: 'center', justifyContent: 'center' }}>
                        <Image style={{ width: 110, height: 80 }} resizeMode='contain' source={ require('@/assets/images/dashboard-logo.png') }/>
                    </View>
                    <TouchableOpacity style={{ width: '20%', height: '100%', justifyContent: 'center', alignItems: 'flex-end', paddingRight: 15 }}>
                        <Ionicons name="settings-outline" size={24} color="black" />
                    </TouchableOpacity>
                </View>

                <View style={ Styles.searchContainer }>
                    <SearchBar />
                </View>

                <View style={ Styles.bodyContainer }>

                    <Swiper
                        ref={swiperRef}
                        cards={ db }
                        renderCard={(card: dataTypes ) => {
                            return (
                                <View style={[ Styles.card, { backgroundColor: card.bg } ]}>
                                    <Image resizeMode="contain" source={{ uri: card.image }} style={ Styles.cardImage } />
                                    <View style={{ 
                                        width: '75%',
                                        // height: 100,
                                        backgroundColor: 'rgba(0,0,0,0.4)',
                                        position: 'absolute',
                                        bottom: 10,
                                        left: 10,
                                        padding: 10,
                                        paddingTop: 20,
                                        paddingBottom: 20,
                                        borderRadius: 6,
                                    }}>
                                        <Text style={{ color: '#fff', fontFamily: 'Avenir-Black', fontSize: 20 }}>{ card.name }</Text>
                                        <Spacer gap={5}/>
                                        <Text style={{ color: '#fff', fontFamily: 'Avenir-Black', fontSize: 17 }}>{ card.brand }</Text>
                                        <Spacer gap={5}/>
                                        <Text style={{ color: '#fff', fontFamily: 'Avenir-Black', fontSize: 17 }}>{ card.price }</Text>
                                    </View>
                                </View>
                            )
                        }}
                        onSwiped={(cardIndex: number ) => {
                            setNopeOpacity(1);
                            setLikeOpacity(1);
                            likeButtonWith.value = withSpring( 50 );
                            likeButtonHeight.value = withSpring( 50 );

                            if( db.length-1 === cardIndex ){
                                setSwipeIndex( 0 );
                            } else {
                                setSwipeIndex( cardIndex + 1 );
                            }
                            
                        }}                        
                        onSwiping={(e) => {
                            if( e < 0 ){
                                setNopeOpacity(1);
                                setLikeOpacity(0);

                                likeButtonWith.value = withSpring( 70 );
                                likeButtonHeight.value = withSpring( 70 );

                            } else if( e > 0 ) {
                                setNopeOpacity(0);
                                setLikeOpacity(1);

                                likeButtonWith.value = withSpring( 70 );
                                likeButtonHeight.value = withSpring( 70 );
                            }
                        }}
                        onSwipedAborted={() => {
                            setNopeOpacity(1);
                            setLikeOpacity(1);
                            likeButtonWith.value = withSpring( 50 );
                            likeButtonHeight.value = withSpring( 50 );
                        }}
                        onSwipedAll={() => {console.log('onSwipedAll')}}
                        onTapCard={ ( d ) => {
                            setSwipeData( db[d] );
                            setModalVisible(!modalVisible);
                        }}

                        cardIndex={0}
                        verticalSwipe={false}
                        showSecondCard={true}
                        stackSize={3}
                        infinite={true}
                        // animateCardOpacity
                        
                        // Styles
                        backgroundColor={'transparent'}
                        cardVerticalMargin={20}
                        cardHorizontalMargin={20}

                        // OverLap content and styles
                        overlayLabels={{
                            overlayLabelStyle:{
                                fontSize: 15,
                                fontWeight: 'bold',
                                borderRadius: 10,
                                padding: 10,
                                overflow: 'hidden'
                            },
                            left: {
                                element: <View style={{ backgroundColor: '#fff', borderWidth:1, borderColor: 'red', height: 45, width: 90, borderRadius: 10,  flexDirection: 'row', alignItems: 'center', justifyContent: 'center'  }}>
                                    <AntDesign name="close" size={22} color="red" />
                                    <Text style={{  marginLeft: 5, fontSize: 20 }}>Nope</Text>
                                </View>, /* Optional */
                                // title: 'NOPE',
                                style: {
                                    label: {
                                        backgroundColor: 'red',
                                        borderColor: 'black',
                                        color: 'white',
                                        borderWidth: 1
                                    },
                                    wrapper: {
                                        flexDirection: 'column',
                                        alignItems: 'flex-end',
                                        justifyContent: 'flex-start',
                                        marginTop: 10,
                                        marginLeft: -10
                                    }
                                }
                            },
                            right: {
                                element: <View style={{ backgroundColor: '#fff', borderWidth:1, borderColor: 'green', height: 45, width: 90, borderRadius: 10,  flexDirection: 'row', alignItems: 'center', justifyContent: 'center'  }}>
                                    <AntDesign name="heart" size={22} color="green" />
                                    <Text style={{ marginLeft: 5, fontSize: 20 }}>Like</Text>
                                </View>,
                                title: 'LIKE',
                                style: {
                                    label: {
                                        backgroundColor: 'green',
                                        borderColor: 'black',
                                        color: 'white',
                                        borderWidth: 1
                                    },
                                    wrapper: {
                                        flexDirection: 'column',
                                        alignItems: 'flex-start',
                                        justifyContent: 'flex-start',
                                        marginTop: 10,
                                        marginLeft: 10
                                    }
                                }
                            }
                        }}
                    />

                    <View style={ Styles.menuContainer }>
                        
                        <View style={ Styles.buttonWrap }>
                            <TouchableOpacity onPress={ handleSwipeLeft } activeOpacity={0.7}>
                                <Animated.View style={[ Styles.buttonItem, Styles.buttonItemShadow, {  width:likeButtonWith, height: likeButtonHeight }, { opacity: nopeOpacity } ]}>
                                    <Image style={{ width: '60%', height: '60%' }} source={ require('@/assets/images/close.png')} resizeMode='contain' />
                                </Animated.View>
                            </TouchableOpacity>
                            <TouchableOpacity onPress={ ()=> {
                                
                                // let a = swiperRef.current?.state.firstCardIndex;
                                // Alert.alert(' - ' +  swipeIndex );
                                setSwipeData( db[swipeIndex] );
                                setModalVisible(!modalVisible);

                                }}>
                                <View style={[ Styles.buttonItem, Styles.buttonItemShadow ]}>
                                    <Image style={{ width: '90%', height: '90%' }} source={ require('@/assets/images/cart.png')} resizeMode='contain' />
                                </View>
                            </TouchableOpacity>
                            <TouchableOpacity onPress={ handleSwipeRight } activeOpacity={0.7}>
                                <Animated.View style={[ Styles.buttonItem, Styles.buttonItemShadow, {  width:likeButtonWith, height: likeButtonHeight }, { opacity: likeOpacity } ]}>
                                    <Image style={{ width: '100%', height: '100%' }} source={ require('@/assets/images/heart.png')} resizeMode='contain' />
                                </Animated.View>
                            </TouchableOpacity>
                        </View>

                        <Modal
                            animationType="slide"
                            transparent={true}
                            visible={modalVisible}
                            onRequestClose={() => {
                                setModalVisible(!modalVisible);
                            }}>
                            
                            <TouchableWithoutFeedback onPress={ ()=>setModalVisible(!modalVisible) }>
                                <View style={{
                                    position: 'absolute',
                                    top: 0,
                                    bottom: 0,
                                    left: 0,
                                    right: 0,
                                    // backgroundColor: 'rgba(0,0,0,0.5)'
                                }}></View>
                            </TouchableWithoutFeedback>

                            <View style={Styles.centeredView}>
                                <View style={Styles.modalView}>
                                    <Text style={{ fontFamily: 'Montserrat-Medium', fontSize: 24 }}>
                                        { swipeData['price'] }
                                    </Text>
                                    <Spacer gap={20}/>
                                    <Text style={Styles.modalText}>
                                        {  swipeData['description'] }
                                    </Text>
                                    <Button title="Buy now" onPress={ () => handleBuy( swipeData['url'] ) }/>
                                </View>
                            </View>
                        </Modal>

                        <Modal
                            animationType="slide"
                            transparent={true}
                            visible={notifyModalVisible}
                            onRequestClose={() => {
                                setNotifyModalVisible(!notifyModalVisible);
                            }}>
                            <View style={{ flex: 1, padding: 10, backgroundColor: '#fff' }}>
                                <SafeAreaView style={{ flex: 1 }}>
                                    <View style={{ flexWrap: 'wrap', flexDirection: 'row' }}>
                                        <View style={{ width: '33.33%' }}></View>
                                        <View style={{ width: '33.33%', height:40, justifyContent: 'center' }}>
                                            <Text style={{ fontFamily: 'Montserrat-SemiBold', fontSize: 18 }}>Notifications</Text>
                                        </View>
                                        <View style={{ width: '33.33%', alignItems: 'flex-end', justifyContent: 'center' }}>
                                            <TouchableOpacity
                                                onPress={ () => setNotifyModalVisible(!notifyModalVisible) }
                                                style={{ width: 40, height: 40,backgroundColor: '#fff', alignItems: 'center', justifyContent: 'center' }}>
                                                <AntDesign name="close" size={24} color="black" />
                                            </TouchableOpacity>
                                        </View>
                                    </View>
                                    {/* <Spacer gap={10} /> */}
                                    <View style={{ flex:1 }}>

                                        <FlatList
                                            style={{ flex:1, padding: 10}}
                                            data= { db.filter( item => {
                                                if( item.id == 1 || item.id == 2 ){
                                                    return item
                                                }
                                            }) }
                                            renderItem={({item}) => <NotifyItem name={ item.name } price={ item.price } image={ item.image } /> 
                                        }/>

                                    </View>
                                </SafeAreaView>
                            </View>
                        </Modal>

                    </View>

                </View>

            </View>
        </SafeAreaView>
    )
}

const Styles = StyleSheet.create({
    background: {
        position: 'absolute',
        left: 0,
        right: 0,
        top: 0,
        height: '100%',
    },
    container: {
        flex: 1,
        width: '100%',
        height: '100%',
        overflow: 'hidden',
    },
    safearea: {
        flex: 1,
        height: '100%',
        backgroundColor: '#fff',
    },
    headerContainer: {
        height: 50,
        flexWrap: 'wrap',
        flexDirection: 'row',
    },
    searchContainer: {
        height: 50,
        flexWrap: 'wrap',
        backgroundColor: '#fff',
    },
    bodyContainer: {
        flex: 1,
        flexWrap: 'wrap',
        backgroundColor: 'rgb(245, 244, 240)',
        overflow: 'hidden'
    },


    topMenuContainer:{
        flex: 1,
        flexWrap: 'wrap',
    },
    cardContainer: {
        // flex: 10,
        height: '100%',
        position: 'relative',
        // overflow: 'hidden',
        // alignItems: 'center',
        // justifyContent: 'center',
        // backgroundColor: 'red',
        // backgroundColor: 'yellow'
    },
    card: {
        backgroundColor: '#fff',
        position: 'absolute',
        top: 0,
        left: 0,
        width: '100%',
        height: '60%',
        borderRadius: 10,
        overflow: 'hidden',
        borderColor: '#999',
        borderWidth: 1,
        // justifyContent: 'flex-start',
        // alignItems: 'flex-start',
        // zIndex: 9999,
        shadowOpacity: 0.5,
        shadowRadius: 20,
        elevation: 5,
    },
    cardImage: {
        flex: 1,
        // backgroundColor: '#fff',
        borderRadius: 10
    },
    shadow: {
        shadowColor: '#333',
        shadowOffset: { width: 0, height: 1 },
        shadowOpacity: 0.4,
        shadowRadius: 20,  
        elevation: 50
    },

    menuContainer: {
        width: '100%',
        height: 100,
        position: 'absolute',
        bottom: 0,
        zIndex:112,
        // backgroundColor: 'rgb(0, 66, 180)',
        alignItems: 'center',
        justifyContent: 'center'
    },
    buttonWrap: {
        height: 80,
        width: '100%',
        // backgroundColor: '#fff',
        borderRadius: 0,
        // shadowColor: '#999',
        // shadowOffset: { width: 0, height: 3 },
        // shadowOpacity: 0.8,
        // shadowRadius: 20,  
        // elevation: 50,
        flexWrap: 'wrap',
        alignContent: 'space-evenly',
        justifyContent: 'center',
        // borderTopColor: '#dedede',
        // borderTopWidth: 1,
    },
    buttonItem: {
        height: 50,
        width: 50,
        borderRadius: 50,
        padding: 10,
        backgroundColor: '#FFF',
        alignItems: 'center',
        justifyContent: 'center',
    },
    buttonItemShadow: {
        shadowColor: 'rgb(5, 26, 77)',
        shadowOffset: { width: 5, height: 5 },
        shadowOpacity: 0.9,
        shadowRadius: 9,  
        elevation: 5,
    },
    buttonItemSelected: {
        shadowColor: '#777',
        shadowOffset: { width: 5, height: 5 },
        shadowOpacity: 0.9,
        shadowRadius: 9,  
        elevation: 5,
    },

    // Modal Styles

    centeredView: {
        flex: 1,
        justifyContent: 'flex-end',
        alignItems: 'center',
    },
    modalView: {
        width: '100%',
        margin: 0,
        backgroundColor: 'white',
        borderRadius: 20,
        padding: 35,
        alignItems: 'flex-start',
        shadowColor: '#000',
        shadowOffset: {
            width: 0,
            height: 2,
        },
        shadowOpacity: 0.25,
        shadowRadius: 4,
        elevation: 5,
    },    
    button: {
        borderRadius: 20,
        padding: 10,
        elevation: 2,
    },
    buttonOpen: {
        backgroundColor: '#F194FF',
    },
    buttonClose: {
        backgroundColor: '#2196F3',
    },
    textStyle: {
        color: 'white',
        fontWeight: 'bold',
        textAlign: 'center',
    },
    modalText: {
        marginBottom: 15,
        textAlign: 'justify',
    },

    newcard: {
        borderRadius: 10,
        borderWidth: 2,
        borderColor: "#E8E8E8",
        justifyContent: "flex-start",
        backgroundColor: "white",
        width: '100%',
        height: '100%'
    },
    ball: {
        width: 100,
        height: 100,
        borderRadius: 100,
        backgroundColor: 'blue',
        alignSelf: 'center',
    }

});