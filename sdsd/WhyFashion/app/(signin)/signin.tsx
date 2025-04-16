import { View, Text, StyleSheet } from 'react-native'
import React from 'react'
import AppWrapper from '@/components/AppWrapper'
import { Const } from '@/constants/Const'
import Input from '@/components/Input'
import Spacer from '@/components/Spacer'
import Button from '@/components/Button'

export default function SignIn() {
    

    return (
        <AppWrapper statusbarColor={'light'}>
            <View style={ Styles.container }>

                <View style={ Styles.wrapper}>
                    
                    <Text>Hello</Text>

                </View>

            </View>
        </AppWrapper>
    )
}

const Styles = StyleSheet.create({
    container: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'center'
    },
    wrapper: {
        padding: Const.padding.appInnerPadding,
        width: '100%',
    },
    header: {
        fontFamily: 'Montserrat-Bold',
        fontSize: 20
    }
});