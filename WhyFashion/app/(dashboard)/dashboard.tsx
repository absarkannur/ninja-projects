import { View, Text, StyleSheet, SafeAreaView, Alert, TouchableHighlight, Image, Modal, Pressable, TouchableWithoutFeedback, TouchableOpacity } from 'react-native'
import React, { useEffect, useState } from 'react'
import AppWrapper from '@/components/AppWrapper'
import TinderCard from 'react-tinder-card'
import { LinearGradient } from 'expo-linear-gradient';
import Button from '@/components/Button';
import Spacer from '@/components/Spacer';

import MaterialIcons from '@expo/vector-icons/MaterialIcons';
import Ionicons from '@expo/vector-icons/Ionicons';
import AntDesign from '@expo/vector-icons/AntDesign';
import MaterialCommunityIcons from '@expo/vector-icons/MaterialCommunityIcons';

export default function Dashboard() {

    const [ preventSwipe, setPreventSwipe] = useState([ 'up', 'down' ]);
    const [modalVisible, setModalVisible] = useState(false);

    // useEffect( ()=> {
    // }, []);

    const onSwipe = ( direction: any, id: number ) => {
        console.log( 'You swiped: ' + direction + ' - ' + id );
    }

    const handlePressCard = () => {
        // Alert.alert( 'Hello Mama' );
        setModalVisible(true);
    }

    return (
        <SafeAreaView style={ Styles.safearea }>
            <LinearGradient
                // Background Linear Gradient
                colors={['rgb(19, 87, 10)', 'transparent' ]}
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

                    <TinderCard
                        preventSwipe={ preventSwipe }
                        onSwipe={ (e) => onSwipe( e, 1232 ) }>
                        <TouchableHighlight activeOpacity={1} style={ Styles.shadow } onPress={ handlePressCard }>
                            <View style={ Styles.card }>
                                <Image 
                                    source={{ uri: 'https://f.nooncdn.com/p/v1613829746/N26089509A_1.jpg'}} 
                                    resizeMode="cover" style={ Styles.cardImage } />
                            </View>
                        </TouchableHighlight>
                    </TinderCard>

                    <TinderCard
                        preventSwipe={ preventSwipe }
                        onSwipe={ (e) => onSwipe( e, 2123 ) }>
                        <TouchableHighlight activeOpacity={1} style={ Styles.shadow } onPress={ handlePressCard }>
                            <View style={ Styles.card }>
                                <Image 
                                    source={{ uri: 'https://f.nooncdn.com/p/pzsku/Z793E91EB8BAF6238E67BZ/45/_/1742369807/8d6d5983-30a1-42c0-80b8-e30872675981.jpg'}} 
                                    resizeMode="cover" style={ Styles.cardImage } />
                            </View>
                        </TouchableHighlight>
                    </TinderCard>

                </View>
                <View style={ Styles.menuContainer }>

                    <View style={ Styles.buttonWrap }>

                        <TouchableOpacity activeOpacity={0.7}>
                            <View style={[ Styles.buttonItem, Styles.buttonItemSelected ]}>
                                <MaterialCommunityIcons name="cards" size={26} color="#888" />
                            </View>
                        </TouchableOpacity>
                        
                        <TouchableOpacity activeOpacity={0.7}>
                            <View style={[ Styles.buttonItem, Styles.buttonItemShadow ]}>
                                <Ionicons name="heart" size={26} color="red" />
                            </View>
                        </TouchableOpacity>

                        <TouchableOpacity activeOpacity={0.7}>
                            <View style={[ Styles.buttonItem, Styles.buttonItemShadow ]}>
                                <Ionicons name="settings" size={24} color="#888" />
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
        width: '100%'
    },
    safearea: {
        flex: 1
    },
    topMenuContainer:{
        flex: 1,
        flexWrap: 'wrap',
        borderBottomWidth: 1,
        borderColor: 'rgb(34, 124, 22)',
    },
    cardContainer: {
        flex: 6,
        // backgroundColor: 'yellow'
    },
    menuContainer: {
        flex: 1,
        // backgroundColor: 'blue',
        alignItems: 'center',
        justifyContent: 'center'
    },
    card: {
        backgroundColor: '#fff',
        position: 'absolute',
        top: 40,
        left: 20,
        width: 350,
        height: 460,
        borderRadius: 10,
        borderColor: '#999',
        borderWidth: 1,
        overflow: 'hidden',
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
        borderTopColor: '#dedede',
        borderTopWidth: 1,
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
        shadowColor: '#aaa',
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
});