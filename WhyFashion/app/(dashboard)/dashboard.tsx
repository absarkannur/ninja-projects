import { View, Text, StyleSheet, SafeAreaView, Alert, TouchableHighlight, Image, Modal, Pressable, TouchableWithoutFeedback, TouchableOpacity, Dimensions } from 'react-native'
import React, { useEffect, useState } from 'react'
import AppWrapper from '@/components/AppWrapper'
import TinderCard from 'react-tinder-card'
import { StatusBar } from 'expo-status-bar';
import { LinearGradient } from 'expo-linear-gradient';
import Button from '@/components/Button';
import Spacer from '@/components/Spacer';

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
} from 'react-native-reanimated';

function clamp(val:number, min:number, max:number) {
    return Math.min(Math.max(val, min), max);
}

export default function Dashboard() {

    const [ preventSwipe, setPreventSwipe] = useState([ 'up', 'down' ]);
    const [modalVisible, setModalVisible] = useState(false);

    // useEffect( ()=> {
    // }, []);

    const onSwipe = ( direction: any, id: number ) => {
        console.log( 'You swiped: ' + direction + ' - ' + id );
    }

    const handlePressCard = () => {
        setModalVisible(true);
    }

    const tapGesture = Gesture.Tap().onStart(() => {
        console.log('Tap!');
    });


    const { width, height } = Dimensions.get('screen');

    const translationX = useSharedValue(0);
    const translationY = useSharedValue(0);
    const prevTranslationX = useSharedValue(0);
    const prevTranslationY = useSharedValue(0);

    const animatedStyles = useAnimatedStyle(() => ({
        transform: [
          { translateX: translationX.value },
          { translateY: translationY.value },
        ],
    }));

    const dragGesture = Gesture.Pan()
        .minDistance(1)
        .onStart(() => {
            prevTranslationX.value = translationX.value;
            prevTranslationY.value = translationY.value;
          })
          .onUpdate((event) => {
            const maxTranslateX = width / 2 - 50;
            const maxTranslateY = height / 2 - 50;
      
            translationX.value = clamp(
              prevTranslationX.value + event.translationX,
              -maxTranslateX,
              maxTranslateX
            );
            translationY.value = clamp(
              prevTranslationY.value + event.translationY,
              -maxTranslateY,
              maxTranslateY
            );
          })
          .runOnJS(true);

    return (
        <SafeAreaView style={ Styles.safearea }>
            <StatusBar style='light' />
            <LinearGradient
                // Background Linear Gradient
                colors={['rgb(10, 109, 240)', 'rgb(0, 0, 0)' ]}
                style={ Styles.background }
            />
            <View style={ Styles.container }>
                <View style={ Styles.topMenuContainer }>
                    <View style={{ padding: 10, width: '70%', height: '100%', justifyContent: 'center' }}>
                        <Text style={{ fontFamily: 'Montserrat-black', fontSize: 22, color: '#fff' }}>WhyFashion</Text>
                    </View>
                    <View style={{ padding: 10, width: '30%', height: '100%', justifyContent: 'center', alignItems: 'center' }}>
                        <Image style={{ width: 45, height: 45 }} source={ require('@/assets/images/man.png') } />
                    </View>
                </View>
                <View style={ Styles.cardContainer }>

                    {/* <TinderCard
                        preventSwipe={ preventSwipe }
                        
                        swipeRequirementType={'velocity'}
                        onSwipe={ (e) => onSwipe( e, 1232 ) }>
                        <TouchableHighlight activeOpacity={1} style={ Styles.shadow } onPress={ handlePressCard }>
                            <View style={ Styles.card }>
                            <LinearGradient
                                // Background Linear Gradient
                                colors={['transparent', 'rgb(0, 0, 0)' ]}
                                style={[ Styles.background, {zIndex: 1} ]}/>
                                <Image 
                                    source={{ uri: 'https://f.nooncdn.com/p/v1613829746/N26089509A_1.jpg'}} 
                                    resizeMode="cover" style={ Styles.cardImage } />
                            </View>
                        </TouchableHighlight>
                    </TinderCard>

                    <TinderCard
                        preventSwipe={ preventSwipe }
                        
                        swipeRequirementType={'velocity'}
                        onSwipe={ (e) => onSwipe( e, 2123 ) }>
                        <TouchableHighlight activeOpacity={1} style={ Styles.shadow } onPress={ handlePressCard }>
                            <View style={ Styles.card }>
                            <LinearGradient
                                // Background Linear Gradient
                                colors={['transparent', 'rgb(0, 0, 0)' ]}
                                style={[ Styles.background, {zIndex: 1} ]}/>
                                <Image 
                                    source={{ uri: 'https://f.nooncdn.com/p/pzsku/Z793E91EB8BAF6238E67BZ/45/_/1742369807/8d6d5983-30a1-42c0-80b8-e30872675981.jpg'}} 
                                    resizeMode="cover" style={ Styles.cardImage } />
                            </View>
                        </TouchableHighlight>
                    </TinderCard> */}

                <GestureHandlerRootView>
                    <GestureDetector gesture={dragGesture}>
                        <Animated.View style={[ animatedStyles, { 
                            width: 300, 
                            height: 400, 
                            backgroundColor: '#fff',
                            borderRadius: 10,
                            padding: 10
                            }]}>
                            <Text>Card</Text>
                        </Animated.View>
                    </GestureDetector>
                </GestureHandlerRootView>

                </View>
                <View style={ Styles.menuContainer }>

                    <View style={ Styles.buttonWrap }>

                        <TouchableOpacity activeOpacity={0.7}>
                            <View style={[ Styles.buttonItem, Styles.buttonItemShadow ]}>
                                <Ionicons name="close" size={30} color="red" />
                            </View>
                        </TouchableOpacity>

                        <TouchableOpacity activeOpacity={0.7}>
                            <View style={[ Styles.buttonItem, Styles.buttonItemShadow ]}>
                                <Ionicons name="heart" size={30} color="green" />
                            </View>
                        </TouchableOpacity>

                    </View>

                    <Modal
                        animationType="slide"
                        transparent={true}
                        visible={modalVisible}
                        onRequestClose={() => {
                            Alert.alert('Modal has been closed.');
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
        position: 'relative'
    },
    safearea: {
        flex: 1,
        backgroundColor: 'rgb(0, 0, 0)',
    },
    topMenuContainer:{
        flex: 1,
        flexWrap: 'wrap',
    },
    cardContainer: {
        flex: 10,
        alignItems: 'center',
        justifyContent: 'center'
        // overflow: 'hidden'
        // backgroundColor: 'yellow'
    },
    card: {
        backgroundColor: '#fff',
        position: 'absolute',
        top: 0,
        left: 0,
        width: '100%',
        height: 600,
        borderRadius: 10,
        // borderColor: '#999',
        // borderWidth: 1,
        overflow: 'hidden',
        // justifyContent: 'center',
        // alignItems: 'center'
    },
    cardImage: {
        flex: 1,
        justifyContent: 'center',
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
    },

});