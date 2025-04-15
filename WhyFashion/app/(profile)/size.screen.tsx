import { View, Text, StyleSheet, TouchableOpacity, Alert } from 'react-native'
import React, { useState } from 'react'
import AppWrapper from '@/components/AppWrapper'
import { router, Redirect } from 'expo-router'
import { Const } from '@/constants/Const'
import Button from '@/components/Button'

export default function SizeScreen() {

    const [ size , setSize ] = useState('');

    const handleNext = () => {
        router.push('/(profile)/brands.screen');
    }

    const handleSize = ( value: string ) => {
        setSize( value )
    }

    return (
        <AppWrapper statusbarColor={'dark'}>
            <View style={ Styles.container }>
                
                <View style={ Styles.topWrapper }>
                    <Text style={ Styles.header }>What's your cloth size</Text>
                    <Text>Let us know about your self</Text>
                </View>

                <View style={ Styles.wrapper }>


                    <View style={ Styles.sizeWraper }>

                        <TouchableOpacity 
                                onPress={ ()=> handleSize( 'XXXS' ) }
                                activeOpacity={0.6}>
                            <Text style={[ Styles.sizelist, ( size === 'XXXS' ) ?  Styles.sizeActive: '' ]}>
                                XXXS
                            </Text>
                        </TouchableOpacity>
                        
                        <TouchableOpacity 
                                onPress={ ()=> handleSize( 'XXS' ) }
                                activeOpacity={0.6}>
                            <Text style={[ Styles.sizelist, ( size === 'XXS' ) ?  Styles.sizeActive: '' ]}>
                                XXS
                            </Text>
                        </TouchableOpacity>

                        <TouchableOpacity 
                                onPress={ ()=> handleSize( 'XS' ) }
                                activeOpacity={0.6}>
                            <Text style={[ Styles.sizelist, ( size === 'XS' ) ?  Styles.sizeActive: '' ]}>
                                XS
                            </Text>
                        </TouchableOpacity>

                        <TouchableOpacity 
                                onPress={ ()=> handleSize( 'S' ) }
                                activeOpacity={0.6}>
                            <Text style={[ Styles.sizelist, ( size === 'S' ) ?  Styles.sizeActive: '' ]}>
                                S
                            </Text>
                        </TouchableOpacity>

                        <TouchableOpacity 
                                onPress={ ()=> handleSize( 'M' ) }
                                activeOpacity={0.6}>
                            <Text style={[ Styles.sizelist, ( size === 'M' ) ?  Styles.sizeActive: '' ]}>
                                M
                            </Text>
                        </TouchableOpacity>

                        <TouchableOpacity 
                                onPress={ ()=> handleSize( 'L' ) }
                                activeOpacity={0.6}>
                            <Text style={[ Styles.sizelist, ( size === 'L' ) ?  Styles.sizeActive: '' ]}>
                                L
                            </Text>
                        </TouchableOpacity>

                        <TouchableOpacity 
                                onPress={ ()=> handleSize( 'XL' ) }
                                activeOpacity={0.6}>
                            <Text style={[ Styles.sizelist, ( size === 'XL' ) ?  Styles.sizeActive: '' ]}>
                                XL
                            </Text>
                        </TouchableOpacity>

                        <TouchableOpacity 
                                onPress={ ()=> handleSize( 'XXL' ) }
                                activeOpacity={0.6}>
                            <Text style={[ Styles.sizelist, ( size === 'XXL' ) ?  Styles.sizeActive: '' ]}>
                                XXL
                            </Text>
                        </TouchableOpacity>
                        <TouchableOpacity 
                                onPress={ ()=> handleSize( 'XXXL' ) }
                                activeOpacity={0.6}>
                            <Text style={[ Styles.sizelist, ( size === 'XXXL' ) ?  Styles.sizeActive: '' ]}>
                                XXXL
                            </Text>
                        </TouchableOpacity>
                        <TouchableOpacity 
                                onPress={ ()=> handleSize( 'XXXXL' ) }
                                activeOpacity={0.6}>
                            <Text style={[ Styles.sizelist, ( size === 'XXXXL' ) ?  Styles.sizeActive: '' ]}>
                                XXXXL
                            </Text>
                        </TouchableOpacity>

                    </View>

                </View>

                <View style={ Styles.bottomWrapper }>
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
    header: {
        fontFamily: 'Montserrat-Bold',
        fontSize: 30,
        marginTop: 20,
        marginBottom: 5,
        textAlign: 'left',
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
        // backgroundColor: 'red',
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
    }
});