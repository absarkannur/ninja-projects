import { View, Text, Alert } from 'react-native'
import React, { useEffect, useState, useContext } from 'react'
import { useFonts } from 'expo-font'
import { Redirect, Stack, router } from 'expo-router'

export default function _layout() {

    const [ fontsLoaded, error ] = useFonts({
        "Montserrat-Black": require('@/assets/fonts/Montserrat-Black.ttf'),
        "Montserrat-BlackItalic": require('@/assets/fonts/Montserrat-BlackItalic.ttf'),
        "Montserrat-Bold": require('@/assets/fonts/Montserrat-Bold.ttf'),
        "Montserrat-BoldItalic": require('@/assets/fonts/Montserrat-BoldItalic.ttf'),
        "Montserrat-ExtraBoldItalic": require('@/assets/fonts/Montserrat-ExtraBoldItalic.ttf'),
        "Montserrat-ExtraLight": require('@/assets/fonts/Montserrat-ExtraLight.ttf'),
        "Montserrat-ExtraLightItalic": require('@/assets/fonts/Montserrat-ExtraLightItalic.ttf'),
        "Montserrat-Italic": require('@/assets/fonts/Montserrat-Italic.ttf'),
        "Montserrat-Light": require('@/assets/fonts/Montserrat-Light.ttf'),
        "Montserrat-LightItalic": require('@/assets/fonts/Montserrat-LightItalic.ttf'),
        "Montserrat-Medium": require('@/assets/fonts/Montserrat-Medium.ttf'),
        "Montserrat-MediumItalic": require('@/assets/fonts/Montserrat-MediumItalic.ttf'),
        "Montserrat-Regular": require('@/assets/fonts/Montserrat-Regular.ttf'),
        "Montserrat-SemiBold": require('@/assets/fonts/Montserrat-SemiBold.ttf'),
        "Montserrat-SemiBoldItalic": require('@/assets/fonts/Montserrat-SemiBoldItalic.ttf'),
        "Montserrat-Thin": require('@/assets/fonts/Montserrat-Thin.ttf'),
        "Montserrat-ThinItalic": require('@/assets/fonts/Montserrat-ThinItalic.ttf'),
        
        "Raleway-Bold" : require('@/assets/fonts/Raleway-Bold.ttf'),
        "Raleway-ExtraBold" : require('@/assets/fonts/Raleway-ExtraBold.ttf'),
        "Raleway-ExtraLight" : require('@/assets/fonts/Raleway-ExtraLight.ttf'),
        "Raleway-Heavy" : require('@/assets/fonts/Raleway-Heavy.ttf'),
        "Raleway-Light" : require('@/assets/fonts/Raleway-Light.ttf'),
        "Raleway-Medium" : require('@/assets/fonts/Raleway-Medium.ttf'),
        "Raleway-Regular" : require('@/assets/fonts/Raleway-Regular.ttf'),
        "Raleway-SemiBold" : require('@/assets/fonts/Raleway-SemiBold.ttf'),
        "Raleway-Thin" : require('@/assets/fonts/Raleway-Thin.ttf'),
        "SpaceMono-Regular" : require('@/assets/fonts/SpaceMono-Regular.ttf'),


        "Avenir-Black" : require('@/assets/fonts/Avenir-Black.otf'),
        "Avenir-BlackOblique" : require('@/assets/fonts/Avenir-BlackOblique.otf'),
        "Avenir-Book" : require('@/assets/fonts/Avenir-Book.otf'),
        "Avenir-BookOblique" : require('@/assets/fonts/Avenir-BookOblique.otf'),
        "Avenir-Heavy" : require('@/assets/fonts/Avenir-Heavy.otf'),
        "Avenir-HeavyOblique" : require('@/assets/fonts/Avenir-HeavyOblique.otf'),
        "Avenir-Light" : require('@/assets/fonts/Avenir-Light.otf'),
        "Avenir-LightOblique" : require('@/assets/fonts/Avenir-LightOblique.otf'),
        "Avenir-Medium" : require('@/assets/fonts/Avenir-Medium.otf'),
        // "Avenir-MediumTT" : require('@/assets/fonts/Avenir-Medium.ttf'),
        "Avenir-MediumOblique" : require('@/assets/fonts/Avenir-MediumOblique.otf'),
        "Avenir-Oblique" : require('@/assets/fonts/Avenir-Oblique.otf'),
        "Avenir-Roman" : require('@/assets/fonts/Avenir-Roman.otf'),

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
        <Stack
            screenOptions={{
                headerStyle: {
                    backgroundColor: 'rgb(23, 26, 33)',
                },
                headerTintColor: 'black',
                headerTitleStyle: {
                    fontWeight: 'bold',
                },
            }}>
            <Stack.Screen name="index" options={{
                title: '',
                gestureEnabled: false,
                headerShown: false
            }} />
            <Stack.Screen name="(register)" options={{
                title: 'Register',
                gestureEnabled: false,
                headerShown: true,
                headerTintColor: 'white'
            }} />
            <Stack.Screen name="(signin)" options={{
                gestureEnabled: false,
                headerShown: false
            }} />
            <Stack.Screen name="(profile)" options={{
                gestureEnabled: false,
                headerShown: false
            }} />
            <Stack.Screen name="(dashboard)" options={{
                gestureEnabled: false,
                headerShown: false
            }} />
        </Stack>
        // Auth Layer End
    )
}