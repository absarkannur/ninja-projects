import { View, Text, StyleSheet, TouchableOpacity, Modal, TouchableWithoutFeedback } from 'react-native'
import React, { useState } from 'react'
import AppWrapper from '@/components/AppWrapper';
import { Const } from '@/constants/Const';
import Button from '@/components/Button';
import { router, Redirect } from 'expo-router';
import Spacer from '@/components/Spacer';

import DateTimePicker from '@react-native-community/datetimepicker';

export default function ProfileScreen() {

    const [modalVisible, setModalVisible] = useState(false);
    const [ gender, setGender ] = useState( '' );
    const [ marital, setMarital ] = useState( '' );
    const [ dob, setDob ] = useState<string>('');

    const [date, setDate] = useState(new Date(1598051730000));
    const [mode, setMode] = useState('date');
    const [show, setShow] = useState(false);

    const handleGender = ( value: string ) => {
        setGender( value );
    }
    
    const handleMaritalStatus = ( value: string ) => {
        setMarital( value );
    }

    const handleNext = () => {
        router.push('/(profile)/size.screen');
    }

    const showDatepicker = () => {
        setModalVisible(true);
    }

    const onChangeDatePick = (event: any, selectedDate: any) => {
        const currentDate = selectedDate;
        // setDob(currentDate);

        const d1 = new Date( selectedDate )

        let year = d1.getFullYear();
        let month = Math.abs( d1.getMonth() + 1 ) .toLocaleString();
        let date = d1.getDate().toLocaleString();

        if ( month.length < 2 ) {
            month = '0' + month;
        }

        if (date.length < 2 ) {
            date = '0' + date;
        }

        setDob( date + '-' + month + '-' + year  );      

    }

    return (
        <AppWrapper statusbarColor={'dark'}>
            
            <View style={ Styles.container }>

                <View style={ Styles.header_container }>
                    <Text style={ Styles.header }>What's your gender and age</Text>
                    <Text style={ Styles.subHeader }>Let us know about your self</Text>
                </View>
                <View style={ Styles.body_container }>
                    <View style={ Styles.contentWrapper }>

                        <Spacer gap={20}/>

                        <View style={{ width: '100%' }}>
                            <Text style={[ Styles.subHeader, { fontFamily: 'Montserrat-SemiBold', fontSize: 16, textAlign: 'center' } ]}>Gender</Text>
                        </View>

                        <Spacer gap={10}/>
                        
                        <View style={{  width: '100%', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-between', marginBottom: 20 }}>
                            
                            <TouchableOpacity 
                                style={[ Styles.box, ( gender === 'male') ? Styles.boxActive: '' ]}
                                onPress={ () => handleGender('male') }
                                activeOpacity={0.6}>
                                <Text style={[ ( gender === 'male') ? { color: '#fff', fontFamily: 'Montserrat-Bold' } : { color: '#000', fontFamily: 'Montserrat-SemiBold' } ]}>Male</Text>
                            </TouchableOpacity>

                            <TouchableOpacity 
                                style={[ Styles.box, ( gender === 'female') ? Styles.boxActive: '' ]}
                                onPress={ () => handleGender('female') }
                                activeOpacity={0.6}>
                                <Text style={[ ( gender === 'female') ? { color: '#fff', fontFamily: 'Montserrat-Bold' } : { color: '#000', fontFamily: 'Montserrat-SemiBold' } ]}>Female</Text>
                            </TouchableOpacity>

                        </View>

                        {/* ========== */}

                        {/* <Spacer gap={20}/>

                        <View style={{ width: '100%', }}>
                            <Text style={[ Styles.subHeader, { fontFamily: 'Montserrat-SemiBold', fontSize: 16, textAlign: 'left' } ]}>
                                Marital Status
                            </Text>
                        </View>

                        <Spacer gap={10}/>
                        
                        <View style={{  width: '100%', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-between', marginBottom: 20 }}>
                            
                            <TouchableOpacity 
                                style={[ Styles.box, ( marital === 'single') ? Styles.boxActive: '' ]}
                                onPress={ () => handleMaritalStatus('single') }
                                activeOpacity={0.6}>
                                <Text style={[ ( marital === 'single') ? { color: '#fff', fontFamily: 'Montserrat-Bold' } : { color: '#000', fontFamily: 'Montserrat-SemiBold' } ]}>Single</Text>
                            </TouchableOpacity>

                            <TouchableOpacity 
                                style={[ Styles.box, ( marital === 'married') ? Styles.boxActive: '' ]}
                                onPress={ () => handleMaritalStatus('married') }
                                activeOpacity={0.6}>
                                <Text style={[ ( marital === 'married') ? { color: '#fff', fontFamily: 'Montserrat-Bold' } : { color: '#000', fontFamily: 'Montserrat-SemiBold' } ]}>Married</Text>
                            </TouchableOpacity>

                        </View>

                        <View style={{  width: '100%', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-between', marginBottom: 20 }}>
                            
                            <TouchableOpacity 
                                style={[ Styles.box, ( marital === 'divorced') ? Styles.boxActive: '' ]}
                                onPress={ () => handleMaritalStatus('divorced') }
                                activeOpacity={0.6}>
                                <Text style={[ ( marital === 'divorced') ? { color: '#fff', fontFamily: 'Montserrat-Bold' } : { color: '#000', fontFamily: 'Montserrat-SemiBold' } ]}>Divorced</Text>
                            </TouchableOpacity>

                            <TouchableOpacity 
                                style={[ Styles.box, ( marital === 'widow') ? Styles.boxActive: '' ]}
                                onPress={ () => handleMaritalStatus('widow') }
                                activeOpacity={0.6}>
                                <Text style={[ ( marital === 'widow') ? { color: '#fff', fontFamily: 'Montserrat-Bold' } : { color: '#000', fontFamily: 'Montserrat-SemiBold' } ]}>Widow</Text>
                            </TouchableOpacity>

                        </View> */}

                        {/* ========== */}

                        <Spacer gap={20}/>

                        <View style={{ width: '100%', }}>
                            <Text style={[ Styles.subHeader, { fontFamily: 'Montserrat-SemiBold', fontSize: 14, textAlign: 'center' } ]}>Date Of Birth</Text>
                        </View>

                        <Spacer gap={10}/>

                        <View style={{  width: '100%', flexDirection: 'row', alignItems: 'center', justifyContent: 'space-between', marginBottom: 20 }}>

                            <TouchableOpacity 
                                style={[ Styles.box, { width: '100%' } ,( dob !== '' ) ? Styles.boxActive: '' ]}
                                onPress={ showDatepicker }
                                activeOpacity={0.6}>
                                <Text style={[ ( dob !== '' ) ? { color: '#fff', fontFamily: 'Montserrat-Bold' } : { color: '#000', fontFamily: 'Montserrat-SemiBold' } ]}>{ ( dob !== '' ) ? dob : 'Choose your date of birth' }</Text>
                            </TouchableOpacity>

                            <Modal
                                animationType="fade"
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
                                        backgroundColor: 'rgba(0,0,0,0.5)'
                                    }}></View>
                                </TouchableWithoutFeedback>

                                <View style={Styles.centeredView}>
                                    <View style={Styles.modalView}>
                                        <DateTimePicker
                                            testID="dateTimePicker"
                                            value={date}
                                            mode={ 'date' }
                                            themeVariant='light'
                                            display='spinner'
                                            is24Hour={true}
                                            onChange={onChangeDatePick}
                                        />
                                    </View>
                                </View>

                            </Modal>

                        </View>


                    </View>
                    <View style={ Styles.buttonWrapper }>
                        <Button title="Next" onPress={ handleNext} />
                    </View>
                </View>
                
                {/* <View style={ Styles.wrapper }>

                    <Text style={ Styles.subHeader }>Gender</Text>  

                    <View style={ Styles.innerWrap }>

                        <TouchableOpacity 
                            onPress={ handleGender }
                            activeOpacity={0.6}>
                            <View style={[ Styles.gender, Styles.male, ( male == true ) ? Styles.active: ''  ]}>
                                <Text>Male</Text>
                            </View>
                        </TouchableOpacity>

                        <TouchableOpacity 
                            onPress={ handleGender }
                            activeOpacity={0.6}>
                            <View style={[ Styles.gender, Styles.female, ( female == true ) ? Styles.active: '' ]}>
                                <Text>Female</Text>
                            </View>
                        </TouchableOpacity>

                    </View>

                </View>
                <View style={ Styles.bottomWrapper }>
                    <Text style={ Styles.subHeader }>Age</Text>  

                    <Spacer gap={20} />

                    <View style={ Styles.footerWrap }>

                        <View style={{ width: '100%', flexWrap: 'wrap', flexDirection: 'row' }}>
                            <TouchableOpacity 
                                    onPress={ ()=> handleAge( "20-25" ) }
                                    activeOpacity={0.6}>
                                <Text style={[ Styles.agelist, ( age === '20-25' ) ?  Styles.ageActive: '' ]}>20-25</Text>
                            </TouchableOpacity>

                            <TouchableOpacity 
                                    onPress={ ()=> handleAge( '26-30' ) }
                                    activeOpacity={0.6}>
                                <Text style={[ Styles.agelist, ( age === '26-30' ) ?  Styles.ageActive: '' ]}>26-30</Text>
                            </TouchableOpacity>

                            <TouchableOpacity 
                                    onPress={ ()=> handleAge( '31-35' ) }
                                    activeOpacity={0.6}>
                                <Text style={[ Styles.agelist, ( age === '31-35' ) ?  Styles.ageActive: '' ]}>31-35</Text>
                            </TouchableOpacity>

                            <TouchableOpacity 
                                    onPress={ ()=> handleAge( '36-40' ) }
                                    activeOpacity={0.6}>
                                <Text style={[ Styles.agelist, ( age === '36-40' ) ?  Styles.ageActive: '' ]}>36-40</Text>
                            </TouchableOpacity>

                            <TouchableOpacity 
                                    onPress={ ()=> handleAge( '41-45' ) }
                                    activeOpacity={0.6}>
                                <Text style={[ Styles.agelist, ( age === '41-45' ) ?  Styles.ageActive: '' ]}>41-45</Text>
                            </TouchableOpacity>

                            <TouchableOpacity 
                                    onPress={ ()=> handleAge( '46-50' ) }
                                    activeOpacity={0.6}>
                                <Text style={[ Styles.agelist, ( age === '46-50' ) ?  Styles.ageActive: '' ]}>46-50</Text>
                            </TouchableOpacity>

                            <TouchableOpacity 
                                    onPress={ ()=> handleAge( '51+' ) }
                                    activeOpacity={0.6}>
                                <Text style={[ Styles.agelist, ( age === '51+' ) ?  Styles.ageActive: '' ]}>50+</Text>
                            </TouchableOpacity>
                        </View>

                    </View>

                    <Button title="Next" onPress={ handleNext} />

                </View> */}

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
        justifyContent: 'center'
    },
    body_container: {
        flex: 1,
        width: '100%',
        // backgroundColor: 'green'
    },
    contentWrapper: {
        flex: 20,
        // backgroundColor: 'yellow'
    },
    buttonWrapper: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
        // backgroundColor: 'blue'
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

    wrapper: {
        flex: 3,
        width: '100%'
    },
    bottomWrapper: {
        flex: 3,
        width: '100%'
    },
    header: {
        width: '100%',
        fontFamily: 'Montserrat-Bold',
        fontSize: 30,
        marginBottom: 5,
        textAlign: 'center',
    },
    subHeader: {
        width: '100%',
        fontFamily: 'Montserrat-Medium',
        fontSize: 18,
        textAlign: 'center',
        color: '#444'
    },
    innerWrap: {
        width: '100%',
        flex: 1,
        flexDirection: 'row',
        justifyContent: 'space-evenly',
        alignItems: 'center',
    },
    footerWrap: {
        width: '100%',
        flex: 1,
        flexDirection: 'row',
        // flexWrap: 'wrap',
        justifyContent: 'center',
        alignItems: 'flex-start',
    },
    gender:{
        height: 120,
        width: 120,
        alignItems: 'center',
        justifyContent: 'center',
        borderRadius: 120,
        borderColor: '#999',
        borderWidth: 3
    },
    female: {
        borderColor: '#f66'
    },
    male:{
        borderColor: 'lightblue'
    },
    active: {
        // borderColor: '#444',
        backgroundColor: '#efefef'
    },
    agelist: {
        padding: 10,
        marginRight: 4,
        marginBottom: 10,
        paddingLeft: 20,
        paddingRight: 20,
        borderRadius:20,
        borderColor: '#444',
        borderWidth: 1,
    },
    ageActive: {
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