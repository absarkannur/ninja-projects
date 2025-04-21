import { View, Text, StyleSheet, TouchableOpacity, Modal, TouchableWithoutFeedback, Alert } from 'react-native'
import React, { useState } from 'react'
import AppWrapper from '@/components/AppWrapper'
import { router, Redirect } from 'expo-router'
import { Const } from '@/constants/Const'
import Button from '@/components/Button'

import {Picker} from '@react-native-picker/picker';
import Spacer from '@/components/Spacer'

export default function SizeScreen() {

    const [ topsize , setTopsize ] = useState('');
    const [ outerwear , setOuterwear ] = useState('');
    const [ underwear , setUnderwear ] = useState('');
    const [ suitsTailoring , setSuitsTailoring ] = useState('');


    const [ modalTops, setModalTops ] = useState(false);
    const [ modalOuterwear, setModalOuterwear ] = useState(false);
    const [ modalUnderwear, setModalUnderwear ] = useState(false);
    const [ modalSuitsTailoring, setModalSuitsTailoring ] = useState(false);

    const handleNext = () => {
        router.push('/(profile)/brands.screen');
    }

    const showDatepicker = () => {
        setModalTops(true);
    }

    return (
        <AppWrapper statusbarColor={'dark'}>
            <View style={ Styles.container }>
                
                <View style={ Styles.header_container }>
                    <Text style={ Styles.header }>Pick your perfect fit!</Text>
                    {/* <Text style={ Styles.subHeader }>Let us know about your self</Text> */}
                </View>

                <View style={ Styles.body_container }>
                    <View style={ Styles.contentWrapper }>

                        {/* <Spacer gap={20}/> */}

                        <View style={{ width: '100%' }}>
                            <Text style={[ Styles.subHeader, { fontFamily: 'Montserrat-SemiBold', fontSize: 16, textAlign: 'center' } ]}>
                                Tops
                            </Text>
                        </View>

                        <Spacer gap={10}/>

                          <View style={{  width: '100%', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-between', marginBottom: 20 }}>
                                                    
                            <TouchableOpacity
                                onPress={ showDatepicker } 
                                style={[ Styles.box, { width: '100%' }, ( topsize ) ? Styles.boxActive: '' ]}
                                activeOpacity={0.6}>
                                <Text style={[ ( topsize ) ? { color: '#fff', fontFamily: 'Montserrat-Bold' } : { color: '#000', fontFamily: 'Montserrat-SemiBold' } ]}>
                                    { ( topsize !== '' ) ? topsize : "Choose your size" }
                                </Text>
                            </TouchableOpacity>

                            <Modal
                                animationType="fade"
                                transparent={true}
                                visible={modalTops}
                                onRequestClose={() => {
                                    setModalTops(!modalTops);
                                }}>
                                
                                <TouchableWithoutFeedback onPress={ ()=>setModalTops(!modalTops) }>
                                    <View style={{
                                        position: 'absolute',
                                        top: 0,
                                        bottom: 0,
                                        left: 0,
                                        right: 0,
                                        backgroundColor: 'rgba(0,0,0,0.5)'
                                    }}></View>
                                </TouchableWithoutFeedback>

                                <View style={Styles.centeredView}>
                                    <View style={Styles.modalView}>
                                        
                                        <Picker
                                            itemStyle={{ color: "black" }}
                                            style={{ width: '100%' }}
                                            selectedValue={topsize}
                                            onValueChange={(itemValue, itemIndex) =>
                                                setTopsize(itemValue)
                                            }>
                                            <Picker.Item label="XXXS" value="XXXS" />
                                            <Picker.Item label="XXS" value="XXS" />
                                            <Picker.Item label="XS" value="XS" />
                                            <Picker.Item label="S" value="S" />
                                            <Picker.Item label="M" value="M" />
                                            <Picker.Item label="L" value="L" />
                                            <Picker.Item label="XL" value="XL" />
                                            <Picker.Item label="XXL" value="XXL" />
                                            <Picker.Item label="XXXL" value="XXXL" />
                                            <Picker.Item label="4XL" value="4XL" />
                                            <Picker.Item label="5XL" value="5XL" />
                                            <Picker.Item label="6XL" value="6XL" />
                                            <Picker.Item label="7XL" value="7XL" />
                                            <Picker.Item label="8XL" value="8XL" />
                                        </Picker>

                                        <Button 
                                            onPress={ () => {
                                                if( topsize != '' ) {
                                                    setModalTops(!modalTops);
                                                } else {
                                                    setTopsize('XXXS');
                                                    setModalTops(!modalTops);
                                                }
                                                
                                            }}
                                            title="Done" />
                                        
                                    </View>
                                </View>

                            </Modal>

                        </View>

                        {/* ========================== */}

                        <Spacer gap={10}/>

                        <View style={{ width: '100%' }}>
                            <Text style={[ Styles.subHeader, { fontFamily: 'Montserrat-SemiBold', fontSize: 16, textAlign: 'center' } ]}>
                                Bottoms
                            </Text>
                        </View>

                        <Spacer gap={10}/>

                          <View style={{  width: '100%', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-between', marginBottom: 20 }}>
                                                    
                            <TouchableOpacity 
                                onPress={ () => setModalOuterwear(!modalOuterwear) } 
                                style={[ Styles.box, { width: '100%' }, ( outerwear ) ? Styles.boxActive: '' ]}
                                activeOpacity={0.6}>
                                <Text style={[ ( outerwear ) ? { color: '#fff', fontFamily: 'Montserrat-Bold' } : { color: '#000', fontFamily: 'Montserrat-SemiBold' } ]}>
                                    { ( outerwear !== '' ) ? outerwear : "Choose your size" }
                                </Text>
                            </TouchableOpacity>

                            <Modal
                                animationType="fade"
                                transparent={true}
                                visible={modalOuterwear}
                                onRequestClose={() => {
                                    setModalOuterwear(!modalOuterwear);
                                }}>
                                
                                <TouchableWithoutFeedback onPress={ ()=>setModalOuterwear(!modalOuterwear) }>
                                    <View style={{
                                        position: 'absolute',
                                        top: 0,
                                        bottom: 0,
                                        left: 0,
                                        right: 0,
                                        backgroundColor: 'rgba(0,0,0,0.5)'
                                    }}></View>
                                </TouchableWithoutFeedback>

                                <View style={Styles.centeredView}>
                                    <View style={Styles.modalView}>
                                        
                                        <Picker
                                            itemStyle={{ color: "black" }}
                                            style={{ width: '100%' }}
                                            selectedValue={outerwear}
                                            onValueChange={(itemValue, itemIndex) =>
                                                setOuterwear(itemValue)
                                            }>
                                            <Picker.Item label="XXXS" value="XXXS" />
                                            <Picker.Item label="XXS" value="XXS" />
                                            <Picker.Item label="XS" value="XS" />
                                            <Picker.Item label="S" value="S" />
                                            <Picker.Item label="M" value="M" />
                                            <Picker.Item label="L" value="L" />
                                            <Picker.Item label="XL" value="XL" />
                                            <Picker.Item label="XXL" value="XXL" />
                                            <Picker.Item label="XXXL" value="XXXL" />
                                            <Picker.Item label="4XL" value="4XL" />
                                            <Picker.Item label="5XL" value="5XL" />
                                            <Picker.Item label="6XL" value="6XL" />
                                            <Picker.Item label="7XL" value="7XL" />
                                            <Picker.Item label="8XL" value="8XL" />
                                        </Picker>

                                        <Button 
                                            onPress={ () => {
                                                if( outerwear != '' ) {
                                                    setModalOuterwear(!modalOuterwear);
                                                } else {
                                                    setOuterwear('XXXS');
                                                    setModalOuterwear(!modalOuterwear);
                                                }
                                            }}
                                            title="Done" />
                                        
                                    </View>
                                </View>

                            </Modal>


                        </View>

                        {/* ========================== */}

                        <Spacer gap={10}/>

                        <View style={{ width: '100%' }}>
                            <Text style={[ Styles.subHeader, { fontFamily: 'Montserrat-SemiBold', fontSize: 16, textAlign: 'center' } ]}>
                                Outerwear
                            </Text>
                        </View>

                        <Spacer gap={10}/>

                          <View style={{  width: '100%', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-between', marginBottom: 20 }}>
                                                    
                            <TouchableOpacity 
                                onPress={ () => setModalUnderwear(!modalUnderwear) } 
                                style={[ Styles.box, { width: '100%' }, ( underwear ) ? Styles.boxActive: '' ]}
                                activeOpacity={0.6}>
                                <Text style={[ ( underwear ) ? { color: '#fff', fontFamily: 'Montserrat-Bold' } : { color: '#000', fontFamily: 'Montserrat-SemiBold' } ]}>
                                    { ( underwear !== '' ) ? underwear : "Choose your size" }
                                </Text>
                            </TouchableOpacity>

                            <Modal
                                animationType="fade"
                                transparent={true}
                                visible={modalUnderwear}
                                onRequestClose={() => {
                                    setModalUnderwear(!modalUnderwear);
                                }}>
                                
                                <TouchableWithoutFeedback onPress={ ()=>setModalUnderwear(!modalUnderwear) }>
                                    <View style={{
                                        position: 'absolute',
                                        top: 0,
                                        bottom: 0,
                                        left: 0,
                                        right: 0,
                                        backgroundColor: 'rgba(0,0,0,0.5)'
                                    }}></View>
                                </TouchableWithoutFeedback>

                                <View style={Styles.centeredView}>
                                    <View style={Styles.modalView}>
                                        
                                        <Picker
                                            itemStyle={{ color: "black" }}
                                            style={{ width: '100%' }}
                                            selectedValue={underwear}
                                            onValueChange={(itemValue, itemIndex) =>
                                                setUnderwear(itemValue)
                                            }>
                                            <Picker.Item label="XXXS" value="XXXS" />
                                            <Picker.Item label="XXS" value="XXS" />
                                            <Picker.Item label="XS" value="XS" />
                                            <Picker.Item label="S" value="S" />
                                            <Picker.Item label="M" value="M" />
                                            <Picker.Item label="L" value="L" />
                                            <Picker.Item label="XL" value="XL" />
                                            <Picker.Item label="XXL" value="XXL" />
                                            <Picker.Item label="XXXL" value="XXXL" />
                                            <Picker.Item label="4XL" value="4XL" />
                                            <Picker.Item label="5XL" value="5XL" />
                                            <Picker.Item label="6XL" value="6XL" />
                                            <Picker.Item label="7XL" value="7XL" />
                                            <Picker.Item label="8XL" value="8XL" />
                                        </Picker>

                                        <Button 
                                            onPress={ () => {
                                                if( underwear != '' ) {
                                                    setModalUnderwear(!modalUnderwear);
                                                } else {
                                                    setUnderwear('XXXS');
                                                    setModalUnderwear(!modalUnderwear);
                                                }
                                            }}
                                            title="Done" />
                                        
                                    </View>
                                </View>

                            </Modal>

                        </View>

                        {/* ========================== */}

                        <Spacer gap={10}/>

                        <View style={{ width: '100%' }}>
                            <Text style={[ Styles.subHeader, { fontFamily: 'Montserrat-SemiBold', fontSize: 16, textAlign: 'center' } ]}>
                                Suits and Tailoring
                            </Text>
                        </View>

                        <Spacer gap={10}/>

                          <View style={{  width: '100%', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-between', marginBottom: 20 }}>
                                                    
                            <TouchableOpacity 
                                onPress={ () => setModalSuitsTailoring(!modalSuitsTailoring) } 
                                style={[ Styles.box, { width: '100%' }, ( suitsTailoring ) ? Styles.boxActive: '' ]}
                                activeOpacity={0.6}>
                                <Text style={[ ( suitsTailoring ) ? { color: '#fff', fontFamily: 'Montserrat-Bold' } : { color: '#000', fontFamily: 'Montserrat-SemiBold' } ]}>
                                    { ( suitsTailoring !== '' ) ? suitsTailoring : "Choose your size" }
                                </Text>
                            </TouchableOpacity>

                            <Modal
                                animationType="fade"
                                transparent={true}
                                visible={modalSuitsTailoring}
                                onRequestClose={() => {
                                    setModalSuitsTailoring(!modalSuitsTailoring);
                                }}>
                                
                                <TouchableWithoutFeedback onPress={ ()=>setModalSuitsTailoring(!modalSuitsTailoring) }>
                                    <View style={{
                                        position: 'absolute',
                                        top: 0,
                                        bottom: 0,
                                        left: 0,
                                        right: 0,
                                        backgroundColor: 'rgba(0,0,0,0.5)'
                                    }}></View>
                                </TouchableWithoutFeedback>

                                <View style={Styles.centeredView}>
                                    <View style={Styles.modalView}>
                                        
                                        <Picker
                                            itemStyle={{ color: "black" }}
                                            style={{ width: '100%' }}
                                            selectedValue={suitsTailoring}
                                            onValueChange={(itemValue, itemIndex) =>
                                                setSuitsTailoring(itemValue)
                                            }>
                                            <Picker.Item label="XXXS" value="XXXS" />
                                            <Picker.Item label="XXS" value="XXS" />
                                            <Picker.Item label="XS" value="XS" />
                                            <Picker.Item label="S" value="S" />
                                            <Picker.Item label="M" value="M" />
                                            <Picker.Item label="L" value="L" />
                                            <Picker.Item label="XL" value="XL" />
                                            <Picker.Item label="XXL" value="XXL" />
                                            <Picker.Item label="XXXL" value="XXXL" />
                                            <Picker.Item label="4XL" value="4XL" />
                                            <Picker.Item label="5XL" value="5XL" />
                                            <Picker.Item label="6XL" value="6XL" />
                                            <Picker.Item label="7XL" value="7XL" />
                                            <Picker.Item label="8XL" value="8XL" />
                                        </Picker>

                                        <Button 
                                            onPress={ () => {
                                                if( suitsTailoring != '' ) {
                                                    setModalSuitsTailoring(!modalSuitsTailoring);
                                                } else {
                                                    setSuitsTailoring('XXXS');
                                                    setModalSuitsTailoring(!modalSuitsTailoring);
                                                }
                                            }}
                                            title="Done" />
                                        
                                    </View>
                                </View>

                            </Modal>

                        </View>

                    </View>
                    <View style={ Styles.buttonWrapper }>
                        <Button title="Next" onPress={ handleNext} />
                    </View>
                </View>

            </View>
        </AppWrapper>
    )
}

const Styles = StyleSheet.create({
    container: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'flex-start',
        padding: Const.padding.appInnerPadding,
    },
    header_container: {
        width: '100%',
        height: 150,
        alignItems: 'center',
        justifyContent: 'center',
    },
    body_container: {
        flex: 1,
        width: '100%'
    },
    contentWrapper: {
        flex: 4,
    },
    buttonWrapper: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
    },
    box: {
        width: '48%',
        height: 50,
        lineHeight: 50,
        textAlign: 'center',
        borderRadius: 10,
        borderWidth: 1,
        borderColor: '#444',
        fontFamily: 'Montserrat-Medium',
        fontSize: 16,
        alignItems: 'center',
        justifyContent: 'center'
    },
    boxActive: {
        backgroundColor: '#333',
        color: '#fff',
        fontFamily: 'Montserrat-Bold',
    },

    header: {
        width: '100%',
        fontFamily: 'Raleway-SemiBold',
        fontSize: 24,
        marginBottom: 5,
        textAlign: 'center',
        // paddingLeft: 60,
        // paddingRight: 60,
    },
    subHeader: {
        width: '100%',
        fontFamily: 'Montserrat-Medium',
        fontSize: 18,
        textAlign: 'center',
        color: '#444'
    },

    topWrapper: {
        flex: 1,
        width: '100%',
        alignItems: 'flex-start',
        justifyContent: 'flex-start'
    },
    wrapper: {
        flex: 10,
        width: '100%',
    },
    bottomWrapper: {
        flex: 1,
        width: '100%',
        alignItems: 'center',
        justifyContent: 'flex-end',
    },
    sizeWraper:{
        flex: 1,
        flexWrap: 'wrap',
        flexDirection: 'row',
        justifyContent: 'center',
        alignItems: 'center'
    },
    sizelist: {
        padding: 10,
        marginRight: 4,
        marginBottom: 10,
        paddingLeft: 20,
        paddingRight: 20,
        borderRadius:20,
        borderColor: '#444',
        borderWidth: 1,
    },
    sizeActive: {
        color: '#fff',
        backgroundColor: '#999'
    },
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