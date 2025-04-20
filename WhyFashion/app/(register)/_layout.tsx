import { View, Text } from 'react-native';
import React from 'react';
import { Stack } from 'expo-router';
import { Colors } from '@/constants/Colors';

export default function RegisterLayout() {
    return (
        <Stack
            screenOptions={{
                headerStyle: {
                    backgroundColor: 'red',
                },
                headerTintColor: 'red',
                headerTitleStyle: {
                    fontWeight: 'bold',
                },
            }}
            >
            <Stack.Screen 
                name="register" 
                options={{
                    title: 'Register',
                    gestureEnabled: false,
                    headerShown: false
                }} />
        </Stack>
    )
}