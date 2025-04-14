import { View, Text, Alert, StyleSheet, SafeAreaView } from 'react-native'
import React, { useEffect } from 'react'
import { Colors } from '@/constants/Colors'
import { router, Redirect } from 'expo-router'

export default function SplashScreen() {

    useEffect(() => {
        
        setTimeout(function(){
            
            // Demo load
            router.push('/(register)');
            
        }, 3000);
        
    },[]);

    return (
        <View style={ Styles.container }>
            <Text style={ Styles.header }>Start Up Screen</Text>
        </View>
    )
}

const Styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: 'red'
    },
    header: {
        fontFamily: 'Montserrat-SemiBold',
        fontSize: 26,
        marginTop: 60,
        color: Colors.light.tint,
        textAlign: 'center'
    },
});