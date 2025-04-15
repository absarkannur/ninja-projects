import { View, Text, Alert } from 'react-native'
import React, { useEffect, useState, useContext } from 'react'
import { useFonts } from 'expo-font'
import { Redirect, Stack, router } from 'expo-router'

export default function _layout() {

    const [ fontsLoaded, error ] = useFonts({
        "Montserrat-Black": require('../assets/fonts/Montserrat-Black.ttf'),
        "Montserrat-BlackItalic": require('../assets/fonts/Montserrat-BlackItalic.ttf'),
        "Montserrat-Bold": require('../assets/fonts/Montserrat-Bold.ttf'),
        "Montserrat-BoldItalic": require('../assets/fonts/Montserrat-BoldItalic.ttf'),
        "Montserrat-ExtraBoldItalic": require('../assets/fonts/Montserrat-ExtraBoldItalic.ttf'),
        "Montserrat-ExtraLight": require('../assets/fonts/Montserrat-ExtraLight.ttf'),
        "Montserrat-ExtraLightItalic": require('../assets/fonts/Montserrat-ExtraLightItalic.ttf'),
        "Montserrat-Italic": require('../assets/fonts/Montserrat-Italic.ttf'),
        "Montserrat-Light": require('../assets/fonts/Montserrat-Light.ttf'),
        "Montserrat-LightItalic": require('../assets/fonts/Montserrat-LightItalic.ttf'),
        "Montserrat-Medium": require('../assets/fonts/Montserrat-Medium.ttf'),
        "Montserrat-MediumItalic": require('../assets/fonts/Montserrat-MediumItalic.ttf'),
        "Montserrat-Regular": require('../assets/fonts/Montserrat-Regular.ttf'),
        "Montserrat-SemiBold": require('../assets/fonts/Montserrat-SemiBold.ttf'),
        "Montserrat-SemiBoldItalic": require('../assets/fonts/Montserrat-SemiBoldItalic.ttf'),
        "Montserrat-Thin": require('../assets/fonts/Montserrat-Thin.ttf'),
        "Montserrat-ThinItalic": require('../assets/fonts/Montserrat-ThinItalic.ttf'),
    });

    const [ appIsReady, setAppIsReady ] = useState(false);

    useEffect(() => {
        
        if( error ) throw error;
        if( fontsLoaded ) {
            // SplashScreen.hideAsync();
            setAppIsReady( true );
        } 
            
    }, [ fontsLoaded, error ]);

    if( !fontsLoaded && !error ) return null;

    return (
        // Auth Layer
        <Stack>
            <Stack.Screen name="index" options={{
                gestureEnabled: false,
                headerShown: false
            }} />
            <Stack.Screen name="(register)" options={{
                gestureEnabled: false,
                headerShown: false
            }} />
            <Stack.Screen name="(signin)" options={{
                gestureEnabled: false,
                headerShown: false
            }} />
            <Stack.Screen name="(profile)" options={{
                gestureEnabled: false,
                headerShown: false
            }} />
        </Stack>
        // Auth Layer End
    )
}