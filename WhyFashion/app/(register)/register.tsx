import { View, Text, Alert, SafeAreaView, StyleSheet } from 'react-native'
import React, { useEffect } from 'react'
import { router, Redirect } from 'expo-router'
import AppWrapper from '@/components/AppWrapper';
import { Const } from '@/constants/Const';
import Input from '@/components/Input';
import Button from '@/components/Button';

export default function Register() {

    const handleRegister =() => {
        router.push('/(profile)/profile.screen');
    }

    return (
        <AppWrapper>
            <View style={ Styles.container }>

                <View style={ Styles.wrapper }>

                    <Text style={ Styles.header }>Continue with email</Text>

                    <Input placeholder="Full Name" />
                    <Input placeholder="Email" />
                    
                    <Input placeholder="Password" secureTextEntry={true} />
                    <Input placeholder="Confirm Password" secureTextEntry={true} />

                    <Button title="Register" onPress={ handleRegister } />

                </View>

            </View>
        </AppWrapper>
    )
}

const Styles = StyleSheet.create({

    container: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'center',
        padding: Const.padding.appInnerPadding,
    },
    wrapper: {
        width: '100%',
    },
    header: {
        fontFamily: 'Montserrat-Medium',
        fontSize: 20,
        color: "#666",
        marginBottom: 20
    }

});