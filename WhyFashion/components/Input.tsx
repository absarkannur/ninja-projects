import { TextInput, StyleSheet } from 'react-native'
import React, { forwardRef } from 'react'
import { Colors } from '@/constants/Colors';

const Input = forwardRef((props: any, ref) => {
    return (
        <TextInput
            ref={ref}
            placeholderTextColor={ Colors.light.placeholderColor }
            style={ Styles.inputStyle } {...props} />
    )
})

export default Input;

const Styles = StyleSheet.create({
    inputStyle: {
        fontFamily: 'Montserrat-Regular',
        width: '100%',
        height: 50,
        backgroundColor: Colors.light.transparent,
        borderColor: Colors.light.borderColor,
        color: Colors.light.textColor,
        padding: 8,
        // borderBottomWidth: 1,
        borderWidth: 1,
        borderRadius: 10,
        marginBottom: 10,
        fontSize: 16,
    }
})