import { View, Text, StyleSheet, SafeAreaView, Alert, TouchableHighlight, Image, ImageBackground } from 'react-native'
import React, { useEffect, useState } from 'react'
import AppWrapper from '@/components/AppWrapper'
import TinderCard from 'react-tinder-card'

export default function Dashboard() {

    const [ preventSwipe, setPreventSwipe] = useState([ 'up', 'down' ]);

    // useEffect( ()=> {
    // }, []);

    const onSwipe = ( direction: any, id: number ) => {
        console.log('You swiped: ' + direction + ' - ' + id );
    }

    const handlePressCard = () => {
        Alert.alert('Hello Mama');
    }

    return (
        <SafeAreaView>
            <View style={ Styles.container }>
                
                <TinderCard
                    preventSwipe={ preventSwipe }
                    onSwipe={ (e) => onSwipe( e, 1232 ) }>
                    <TouchableHighlight activeOpacity={1} style={ Styles.shadow } onPress={ handlePressCard }>
                        <View style={ Styles.card }>
                            <Image 
                                source={{ uri: 'https://f.nooncdn.com/p/v1613829746/N26089509A_1.jpg'}} 
                                resizeMode="cover" style={ Styles.cardImage } />
                        </View>
                    </TouchableHighlight>
                </TinderCard>

                <TinderCard
                    preventSwipe={ preventSwipe }
                    onSwipe={ (e) => onSwipe( e, 2123 ) }>
                    <TouchableHighlight activeOpacity={1} style={ Styles.shadow } onPress={ handlePressCard }>
                        <View style={ Styles.card }>
                            <Image 
                                source={{ uri: 'https://f.nooncdn.com/p/pzsku/Z793E91EB8BAF6238E67BZ/45/_/1742369807/8d6d5983-30a1-42c0-80b8-e30872675981.jpg'}} 
                                resizeMode="cover" style={ Styles.cardImage } />
                        </View>
                    </TouchableHighlight>
                </TinderCard>

                <TinderCard
                    preventSwipe={ preventSwipe }
                    onSwipe={ (e) => onSwipe( e, 1232 ) }>
                    <TouchableHighlight activeOpacity={1} style={ Styles.shadow } onPress={ handlePressCard }>
                        <View style={ Styles.card }>
                            <Image 
                                source={{ uri: 'https://f.nooncdn.com/p/v1613829746/N26089509A_1.jpg'}} 
                                resizeMode="cover" style={ Styles.cardImage } />
                        </View>
                    </TouchableHighlight>
                </TinderCard>

            </View>
        </SafeAreaView>
    )
}

const Styles = StyleSheet.create({
    container: {
        flex: 1,
    },
    shadow: {
        shadowColor: '#999',
        shadowOffset: { width: 0, height: 1 },
        shadowOpacity: 0.8,
        shadowRadius: 20,  
        elevation: 50
    },
    card: {
        backgroundColor: 'red',
        position: 'absolute',
        top: 60,
        left: 20,
        width: 350,
        height: 560,
        borderRadius: 10,
        borderColor: '#999',
        borderWidth: 1,
        overflow: 'hidden',
    },
    cardImage: {
        flex: 1,
        justifyContent: 'center',
    }
});