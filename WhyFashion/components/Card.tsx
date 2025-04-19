import { View, Text, Image, StyleSheet } from 'react-native'
import React from 'react'
import Animated from 'react-native-reanimated'
import { LinearGradient } from 'expo-linear-gradient';

type Profile = { name: string, image: string };

type CardProps = {
    profile: Profile,
    likeOpacity?: 0 | number,
    nopeOpacity?: 0 | number,
};

export default function Card( { profile, likeOpacity, nopeOpacity }: CardProps ) {

    return (
        <View style={ Styles.card }>
            <View style={{ position: 'absolute', top: 0, left: 0, zIndex:111, width: '100%',height: 50, alignItems: 'center', justifyContent: 'space-between',flexDirection: 'row' }}>
                <Animated.View style={{ opacity: likeOpacity }}>
                    <Text style={{ backgroundColor: '#ddd', color: 'green', textAlign: 'center', fontSize: 30, width: 80 }}>Like</Text>
                </Animated.View>
                <Animated.View style={{ opacity: nopeOpacity }}>
                    <Text style={{ backgroundColor: '#ddd', color: 'red', textAlign: 'center', fontSize: 30, width: 80 }}>Nope</Text>
                </Animated.View>
            </View>
            <View style={{ flex: 1 }}>
                <LinearGradient
                    // Background Linear Gradient
                    colors={['transparent', 'rgb(28, 28, 28)' ]}
                    style={[ Styles.background, {zIndex: 1} ]}/>
                    {
                        ( profile ) ? <Image resizeMode="contain" source={{ uri: profile.image }} style={{flex:1}}/> : <Text>No Result</Text>
                    }
                
            </View>
        </View>
    )
}

const Styles = StyleSheet.create({
    background: {
        position: 'absolute',
        left: 0,
        right: 0,
        top: 0,
        height: '100%',
    },
    card: {
        backgroundColor: '#fff',
        position: 'absolute',
        top: 0,
        left: 0,
        width: '100%',
        height: '100%',
        borderRadius: 10,
        // borderColor: '#999',
        // borderWidth: 1,
        overflow: 'hidden',
        // justifyContent: 'center',
        // alignItems: 'center'
    },
})