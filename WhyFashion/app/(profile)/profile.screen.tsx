import { View, Text, StyleSheet, TouchableOpacity, Alert } from 'react-native'
import React, { useState } from 'react'
import AppWrapper from '@/components/AppWrapper';
import { Const } from '@/constants/Const';
import Button from '@/components/Button';
import { router, Redirect } from 'expo-router';
import Spacer from '@/components/Spacer';

export default function ProfileScreen() {

    const [ male, setMale ] = useState( true );
    const [ female, setFemale ] = useState( false );
    const [ age, setAge ] = useState( '' );

    const handleGender = () => {
        
        if( male === true ){
            setFemale( true );
            setMale( false);
        } 

        if( female === true ){
            setFemale( false );
            setMale( true );
        }
        
    }

    const handleAge = ( value: string ) => {
        setAge( value )
    }

    const handleNext = () => {
        router.push('/(profile)/size.screen');
    }

    return (
        <AppWrapper statusbarColor={'dark'}>
            
            <View style={ Styles.container }>

                <View style={ Styles.topWrapper }>
                    <Text style={ Styles.header }>What's your gender and age</Text>
                    <Text>Let us know about your self</Text>
                </View>
                
                <View style={ Styles.wrapper }>

                    {/* <Text style={ Styles.subHeader }>Gender</Text>   */}

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
    topWrapper: {
        flex: 1,
        width: '100%',
        alignItems: 'flex-start',
        justifyContent: 'flex-start'
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
        fontFamily: 'Montserrat-Bold',
        fontSize: 30,
        marginTop: 20,
        marginBottom: 5,
        textAlign: 'left',
    },
    subHeader: {
        fontFamily: 'Montserrat-Medium',
        fontSize: 20,
        // marginTop: 10,
        // marginBottom: 10,
        textAlign: 'left',
        color: '#666'
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
    }
});