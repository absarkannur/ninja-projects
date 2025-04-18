import { View, Text } from 'react-native';
import React from 'react';
import { Stack, Redirect, Tabs } from 'expo-router'
import { Colors } from '@/constants/Colors';

import AntDesign from '@expo/vector-icons/AntDesign';
import FontAwesome from '@expo/vector-icons/FontAwesome';
import MaterialCommunityIcons from '@expo/vector-icons/MaterialCommunityIcons';
import MaterialIcons from '@expo/vector-icons/MaterialIcons';
import Feather from '@expo/vector-icons/Feather';



export default function DashboardLayout() {
    return (
        <Tabs
            screenOptions={{
                tabBarActiveTintColor: "#FFA001",
                tabBarInactiveTintColor: "#CDCDE0",
                tabBarShowLabel: false,
                tabBarStyle: {
                    backgroundColor: "rgb(27, 27, 27)",
                    borderTopWidth: 1,
                    borderTopColor: '#000',
                    height: 80,
                    paddingTop: 10
                },
            }}>
            <Tabs.Screen name="dashboard"
                options={{
                    headerShown: false,
                    tabBarIcon: ({ color, focused }) =>  <MaterialCommunityIcons name="cards-playing" size={30} color="#999" />
                }}
            />
            <Tabs.Screen name="search.screen"
                options={{
                    headerShown: false,
                    tabBarIcon: ({ color, focused }) => <MaterialCommunityIcons name="map-search" size={30} color="#999" />
                }}
            />
            <Tabs.Screen name="favourite.screen"
                options={{
                    headerShown: false,
                    tabBarIcon: ({ color, focused }) => <Feather name="message-circle" size={30} color="#999" />
                }}
            />
            <Tabs.Screen name="profile.screen"
                options={{
                    headerShown: false,
                    tabBarIcon: ({ color, focused }) => <Feather name="menu" size={30} color="#999" />
                }}
            />
        </Tabs>
    )
}


{/* <Stack
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
</Stack> */}
        