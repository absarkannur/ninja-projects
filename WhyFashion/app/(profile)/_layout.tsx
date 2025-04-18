import { View, Text, Button } from 'react-native'
import React from 'react'
import { router, Stack } from 'expo-router'
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
                    title: '',
                    gestureEnabled: false,
                    headerShown: true,
                    headerBackVisible: true,
                    headerLeft: (props) => (
                        <Button title='Back' color={'#000'} onPress={ ()=> router.push('/') } />
                    ),
                }}
                />
            <Stack.Screen name="size.screen"
                options={{
                    title: '',
                    gestureEnabled: false,
                    headerShown: true,
                }}
            />
            <Stack.Screen name="brands.screen"
                options={{
                    title: '',
                    gestureEnabled: false,
                    headerShown: true,
                }}
            />
            <Stack.Screen name="finish.screen"
                options={{
                    title: '',
                    gestureEnabled: false,
                    headerShown: false,
                }}
            />
        </Stack>
    )
}