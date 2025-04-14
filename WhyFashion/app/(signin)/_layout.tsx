import { View, Text, Button } from 'react-native'
import React from 'react'
import { Stack } from 'expo-router'
import { Colors } from '@/constants/Colors'

export default function AuthLayout() {
    return (
        <Stack
            screenOptions={{
                headerStyle: {
                    backgroundColor: Colors.light.header.backgroundColor,
                },
                headerTintColor: Colors.light.header.headerTintColor,
                headerTitleStyle: {
                    fontWeight: 'bold',
                },
            }}
            >
            <Stack.Screen name="signin"
                options={{
                    title: 'Signin',
                    gestureEnabled: false,
                    headerShown: true,
                }}
            />
        </Stack>
    )
}