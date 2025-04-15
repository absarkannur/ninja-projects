import { View, Text, Button } from 'react-native'
import React from 'react'
import { Stack } from 'expo-router'
import { Colors } from '@/constants/Colors'

export default function ProfileLayout() {
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
            <Stack.Screen name="profile.screen"
                options={{
                    title: 'Profile',
                    gestureEnabled: false,
                    headerShown: true,
                }}
            />
            <Stack.Screen name="size.screen"
                options={{
                    title: 'Cloth Size',
                    gestureEnabled: false,
                    headerShown: true,
                }}
            />
        </Stack>
    )
}