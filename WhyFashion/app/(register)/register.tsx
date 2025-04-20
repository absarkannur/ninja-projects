import { View, Text, Alert, SafeAreaView, StyleSheet, Image } from 'react-native'
import React, { useEffect } from 'react'
import { router, Redirect } from 'expo-router'
import AppWrapper from '@/components/AppWrapper';
import { Const } from '@/constants/Const';
import Input from '@/components/Input';
import Button from '@/components/Button';
import { LinearGradient } from 'expo-linear-gradient';
import { StatusBar } from 'expo-status-bar';

export default function Register() {

    const handleRegister =() => {
        router.push('/(profile)/profile.screen');
    }

    return (
        <SafeAreaView style={ Styles.safearea }>
            <StatusBar style='light' />
            
            <LinearGradient
                // Background Linear Gradient
                colors={['rgb(23, 26, 33)', 'rgb(23, 37, 56)' ]}
                style={ Styles.background } />
                
            <View style={ Styles.container }>

                <View style={[ Styles.wrapper, { height: 200, justifyContent: 'center' } ]}>
                    <Image 
                        source={ require('@/assets/images/splash-logo.png') }
                        style={ Styles.logo_image } />
                </View>

                <View style={ Styles.wrapper }>

                    <Text style={ Styles.header }>Continue with email</Text>

                    <Input placeholder="Full Name" />
                    <Input placeholder="Email" />
                    
                    <Input placeholder="Password" secureTextEntry={true} />
                    <Input placeholder="Confirm Password" secureTextEntry={true} />

                    <Button 
                        background={'rgb(7, 92, 221)'}
                        title="Register" onPress={ handleRegister } />

                </View>

            </View>
        </SafeAreaView>
    )
}

const Styles = StyleSheet.create({
    safearea: {
        flex: 1,
        height: '100%',
        backgroundColor: 'rgb(23, 37, 56)',
    },
    background: {
        position: 'absolute',
        left: 0,
        right: 0,
        top: 0,
        height: '100%',
    },
    container: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'flex-start',
        padding: Const.padding.appInnerPadding,
    },
    wrapper: {
        width: '100%',
        alignItems: 'center'
    },
    header: {
        fontFamily: 'Montserrat-Medium',
        fontSize: 18,
        color: "#fff",
        marginBottom: 20,
        textAlign: 'center',
    },
    logo_image: {
        height: 70,
        width: '70%'
    }

});