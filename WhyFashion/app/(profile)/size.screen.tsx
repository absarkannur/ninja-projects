import { View, Text, StyleSheet, TouchableOpacity, Alert } from 'react-native'
import React, { useState } from 'react'
import AppWrapper from '@/components/AppWrapper'
import { router, Redirect } from 'expo-router'
import { Const } from '@/constants/Const'
import Button from '@/components/Button'

export default function SizeScreen() {

    const [ size , setSize ] = useState('');

    const handleNext = () => {
        router.push('/(profile)/size.screen');
    }

    const handleSize = ( value: string ) => {
        Alert.alert('sdsd')
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
        backgroundColor: 'red',
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