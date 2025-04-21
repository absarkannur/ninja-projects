import { View, Text, StyleSheet, TextInput, Alert, TouchableOpacity } from 'react-native'
import React, { useState, useRef } from 'react'
import Animated, { interpolate, useAnimatedStyle, useSharedValue, withTiming } from 'react-native-reanimated';
import AntDesign from '@expo/vector-icons/AntDesign';

export default function SearchBar() {

    const [ inputActive, setInputActive ] = useState<boolean>(false);
    const [ inputValue, setInputValue ] = useState<string>('');

    const searchWidth = useSharedValue(100);
    const searchRef = useRef<TextInput>(null);

    const animatedStyle = useAnimatedStyle(() => {
        let val = interpolate(searchWidth.value, [80, 100], [80, 100])
        return {
            width: `${val}%`,
        };
    },[searchWidth]);

    const handleOnFocus = () => {

        if( inputActive === true ){
            searchRef.current?.blur();
            searchWidth.value = withTiming( 100 );
            setInputValue('');
        } else {
            searchWidth.value = withTiming( 80 );
        }

        setInputActive(!inputActive);

    }

    return (
        <View style={[ Styles.searchBox ]}>
            <Animated.View style={[ Styles.searchInputBox, animatedStyle ]}>
                <TextInput 
                    value={ inputValue }
                    onChangeText={ setInputValue }
                    ref={ searchRef }
                    onFocus={ handleOnFocus }
                    placeholder='Search (e.g `Low Profile Sneakers`)'
                    style={Styles.searchInput} /> 
                                    
                <AntDesign style={ Styles.searchInputIcon } name="search1" size={20} color="#777777" />
            </Animated.View>
            <View style={[ Styles.searchInputCancel, { opacity: ( inputActive ) ? 1 : 0 } ]}>
                <TouchableOpacity onPress={ handleOnFocus }>
                    <Text style={{ fontSize: 17 }}>Cancel</Text>
                </TouchableOpacity>
            </View>
        </View>
    )
}

const Styles = StyleSheet.create({
    searchBox: {
        flex:1,
        width: '100%',
        paddingLeft: 15,
        paddingRight: 15,
        alignItems: 'flex-start',
        justifyContent: 'flex-start',
    },
    searchInputBox: {
        height: 40,
        backgroundColor: 'rgb(238, 238, 238)',
        borderRadius: 10,
        overflow: 'hidden',
        position: 'relative'
    },
    searchInput: {
        flex: 1,
        padding: 10,
        paddingLeft: 40,
        fontSize: 17,
        color: '#000'
    },
    searchInputIcon: {
        position: 'absolute',
        top: 10,
        left: 10
    },
    searchInputCancel: {
        position: 'absolute',
        top: 0,
        right: 0,
        height: 40,
        width: '20%',
        // backgroundColor: 'red',
        justifyContent: 'center',
        paddingLeft: 5
    }
});