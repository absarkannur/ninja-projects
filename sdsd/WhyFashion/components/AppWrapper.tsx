import React from 'react'
import { ScrollView, SafeAreaView, StyleSheet } from 'react-native'
import { StatusBar } from 'expo-status-bar';
import { Colors } from '@/constants/Colors';

type StateProps = {
    children: any,
    statusbarColor?: any | 'dark',
    styles?: any | null
}

const AppWrapper = ({ children, statusbarColor, styles }: StateProps ) => {
    return (
        <SafeAreaView style={ ( styles ) ? styles : Styles.safearea }>
            <ScrollView contentContainerStyle={ Styles.scrollview }>
                { children}
                <StatusBar style={ statusbarColor } />
            </ScrollView>
        </SafeAreaView>
    )
}

export default AppWrapper

const Styles = StyleSheet.create({
    safearea: {
        flex: 1,
        backgroundColor: Colors.light.innerBackground
    },
    scrollview: {
        flexGrow: 1
    }
});