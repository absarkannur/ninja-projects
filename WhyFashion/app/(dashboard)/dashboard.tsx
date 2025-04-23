import { View, Text, StyleSheet, SafeAreaView, Image, Modal, TouchableWithoutFeedback, TouchableOpacity, Dimensions, FlatList } from 'react-native'
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


// Data preach
// 'https://codesandbox.io/p/sandbox/react-tinder-card-demo-8tzm6?file=%2Fsrc%2Fexamples%2FSimple.js%3A46%2C10-46%2C20'

type dataTypes = { name: string, image: string };

const db: dataTypes[] = [
    { 'name': 'test1', 'image': 'https://f.nooncdn.com/p/pzsku/Z793E91EB8BAF6238E67BZ/45/_/1742369807/8d6d5983-30a1-42c0-80b8-e30872675981.jpg' },
    { 'name': 'test2', 'image': 'https://f.nooncdn.com/p/pzsku/ZC2BD5620D54F3AD5D87FZ/45/_/1739138521/ec67f586-e2be-4f0c-9e6a-f28dda79a944.jpg' },
    { 'name': 'test3', 'image': 'https://f.nooncdn.com/p/v1613829746/N26089509A_1.jpg' },
    { 'name': 'test4', 'image': 'https://f.nooncdn.com/p/pnsku/N70106183V/45/_/1726043631/3064c465-3457-42ef-a234-0b6382365281.jpg' },
    { 'name': 'test5', 'image': 'https://f.nooncdn.com/p/pzsku/ZE57C93631F62176AADD1Z/45/_/1741798933/5351a0a3-f1a7-4c16-b4da-6ecda79cf46d.jpg'},
    { 'name': 'test6', 'image': 'https://f.nooncdn.com/p/pzsku/Z53B26E26C9F25605FE82Z/45/1741629998/b9500a15-7394-4041-995b-4558e82b702b.jpg' }
];

function clamp(val:number, min:number, max:number) {
    return Math.min(Math.max(val, min), max);
}

const NotifyItem = ({ name, image }: dataTypes) => (
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
            <Text style={{color: 'rgb(250, 109, 1)', fontFamily: 'Montserrat-Bold', fontSize: 10, marginBottom: 10 }}>DISCOUNT</Text>
            <Text style={{ fontFamily: 'Montserrat-SemiBold', fontSize: 13 }}>AL BENT AL SHARQIEH women jalabiya , arabian traditional dress</Text>
            
            <View style={{ flexWrap: 'wrap', flexDirection: 'row', marginTop: 10 }}>
                <View style={{ width: '50%', alignItems: 'flex-start', justifyContent: 'center' }}>
                    <Text style={{ fontFamily: 'Montserrat-SemiBold', fontSize: 20 }}>AED 108</Text>
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

    const [modalVisible, setModalVisible] = useState(false);
    const [ notifyModalVisible, setNotifyModalVisible] = useState(false);

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
                        style={{ width: '20%', height: '100%', justifyContent: 'center', alignItems: 'flex-start', paddingLeft: 15 }}>
                        <MaterialIcons name="notifications-none" size={26} color="black" />
                    </TouchableOpacity>
                    <View style={{ width: '60%', height: '100%', alignItems: 'center', justifyContent: 'center' }}>
                        <Image style={{ width: 100, height: 40 }} resizeMode='contain' source={ require('@/assets/images/splash-logo.png') }/>
                        {/* <Text style={{ fontFamily: 'Montserrat-Black', fontSize: 28 }}>LYST</Text> */}
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
                                <View style={ Styles.card}>
                                    {/* <LinearGradient
                                        colors={['transparent', 'transparent', 'transparent', 'rgb(53, 52, 52)' ]}
                                        style={[ Styles.background, {zIndex: 1} ]}/> */}
                                        <Image resizeMode="cover" source={{ uri: card.image }} style={ Styles.cardImage } />
                                </View>
                            )
                        }}
                        onSwiped={(cardIndex: number ) => {
                            setNopeOpacity(1);
                            setLikeOpacity(1);
                            likeButtonWith.value = withSpring( 50 );
                            likeButtonHeight.value = withSpring( 50 );
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
                        onTapCard={ ()=> setModalVisible(!modalVisible) }

                        cardIndex={0}
                        verticalSwipe={false}
                        showSecondCard={true}
                        stackSize={3}
                        infinite={true}
                        
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
                                // element: <Text>NOPE</Text>, /* Optional */
                                title: 'NOPE',
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
                                        marginTop: 30,
                                        marginLeft: -30
                                    }
                                }
                            },
                            right: {
                                // element: <Text>LIKE</Text>, /* Optional */
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
                                        marginTop: 30,
                                        marginLeft: 30
                                    }
                                }
                            }
                        }}
                    />

                    <View style={ Styles.menuContainer }>
                        
                        <View style={ Styles.buttonWrap }>
                            <TouchableOpacity onPress={ handleSwipeLeft } activeOpacity={0.7}>
                                <Animated.View style={[ Styles.buttonItem, Styles.buttonItemShadow, {  width:likeButtonWith, height: likeButtonHeight }, { opacity: nopeOpacity } ]}>
                                    {/* <Ionicons name="close" style={{ transitionDuration: '2s' }} size={ ( likeOpacity ) ? 30 : 50 } color="red" /> */}
                                    <Image style={{ width: '60%', height: '60%' }} source={ require('@/assets/images/close.png')} resizeMode='contain' />
                                </Animated.View>
                            </TouchableOpacity>
                            <TouchableOpacity onPress={ handleSwipeRight } activeOpacity={0.7}>
                                <Animated.View style={[ Styles.buttonItem, Styles.buttonItemShadow, {  width:likeButtonWith, height: likeButtonHeight }, { opacity: likeOpacity } ]}>
                                    <Image style={{ width: '100%', height: '100%' }} source={ require('@/assets/images/heart.png')} resizeMode='contain' />
                                    {/* <Ionicons name="heart" style={{ transitionDuration: '2s' }} size={( nopeOpacity ) ? 30 : 50 } color="green" /> */}
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
                                    <Text style={{ fontFamily: 'Montserrat-Medium', fontSize: 24 }}>AED 1276.98</Text>
                                    <Spacer gap={20}/>
                                    <Text style={Styles.modalText}>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ad ut dolore dicta! Assumenda, neque veniam consequatur dolor porro, tempore totam inventore voluptates obcaecati architecto optio officia similique eos numquam!
                                    </Text>
                                    <Button title="Buy now" />
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
                                            data= { db }
                                            renderItem={({item}) => <NotifyItem name={ item.name } image={ item.image } />} />

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
        height: '71.5%',
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
        backgroundColor: '#999',
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