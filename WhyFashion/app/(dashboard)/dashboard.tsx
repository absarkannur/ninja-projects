import { View, Text, StyleSheet } from 'react-native'
import React from 'react'
import AppWrapper from '@/components/AppWrapper'

export default function Dashboard() {
    return (
        <AppWrapper>
            <View style={ Styles.container }>
                <Text>Dashboard Screen</Text>
            </View>
        </AppWrapper>
    )
}

const Styles = StyleSheet.create({
    container: {
        flex: 1,
    }
});