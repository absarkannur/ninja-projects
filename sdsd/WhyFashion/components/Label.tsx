import { View, Text, StyleSheet } from 'react-native'
import React from 'react'
import { Colors } from '@/constants/Colors'

interface StateProps {
    title: string | null
}   

const Label = ({ title }: StateProps ) => {
    return (
        <Text style={ Styles.textStyle }>{ title }</Text>
    )
}

export default Label

const Styles = StyleSheet.create({
    textStyle: {
        fontFamily: 'Montserrat-Regular',
        fontSize: 13,
        color: Colors.light.labelColor,
        height: 20,
        lineHeight: 20
    }
});