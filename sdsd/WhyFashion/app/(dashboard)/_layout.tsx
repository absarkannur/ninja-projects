import { View, Text } from 'react-native';
import React from 'react';
import { Stack, Redirect, Tabs } from 'expo-router'
import { Colors } from '@/constants/Colors';

import AntDesign from '@expo/vector-icons/AntDesign';
import FontAwesome from '@expo/vector-icons/FontAwesome';
import MaterialCommunityIcons from '@expo/vector-icons/MaterialCommunityIcons';
import MaterialIcons from '@expo/vector-icons/MaterialIcons';


export default function DashboardLayout() {
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
            <Stack.Screen 
                name="dashboard" 
                options={{
                    title: 'Cards',
                    gestureEnabled: false,
                    headerShown: false
                }} />
            <Stack.Screen 
                name="favourite.screen" 
                options={{
                    title: 'Cards',
                    gestureEnabled: false,
                    headerShown: true
                }} />
            <Stack.Screen 
                name="profile.screen" 
                options={{
                    title: 'Cards',
                    gestureEnabled: false,
                    headerShown: true
                }} />
        </Stack>
    )
}





        // <Tabs
        //     screenOptions={{
        //         tabBarActiveTintColor: "#FFA001",
        //         tabBarInactiveTintColor: "#CDCDE0",
        //         tabBarShowLabel: false,
        //         tabBarStyle: {
        //             backgroundColor: "#fff",
        //             // borderTopWidth: 1,
        //             // borderTopColor: Colors.light.borderColor,
        //             height: 84,
        //         },
        //     }}
        //     >
        //     <Tabs.Screen name="dashboard"
        //         options={{
        //             headerShown: false,
        //             tabBarIcon: ({ color, focused }) => ( focused ? <MaterialCommunityIcons name="cards-playing" size={24} color="black" /> : <MaterialCommunityIcons name="cards-outline" size={26} color={'black'} /> )
        //         }}
        //     />
        //     <Tabs.Screen name="favourite.screen"
        //         options={{
        //             headerShown: false,
        //             tabBarIcon: ({ color, focused }) => ( focused ? <MaterialIcons name="favorite" size={24} color="red" /> : <MaterialIcons name="favorite-border" size={26} color="red" /> )
        //         }}
        //     />
        //     <Tabs.Screen name="profile.screen"
        //         options={{
        //             headerShown: false,
        //             tabBarIcon: ({ color, focused }) => ( focused ? <FontAwesome name="user-circle" size={24} color="black" /> : <FontAwesome name="user-circle-o" size={24} color="black" /> )
        //         }}
        //     />
        // </Tabs>