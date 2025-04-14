import { View, Text, Alert, SafeAreaView } from 'react-native'
import React, { useEffect } from 'react'
import { router, Redirect } from 'expo-router'

export default function index() {

    useEffect(()=>{
        // router.push('/(startup)');
    },[]);

    return (
        <SafeAreaView>
            <View>
                <Text>Registration Screen</Text>
            </View>
        </SafeAreaView>
    )
}